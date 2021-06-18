// Simple single stack - see the above example on how to convert this into multiple stacks.
// Also a robust POSIX implementation would check for EINTR and error codes of sem_wait.

// PTHREAD_MUTEX_INITIALIZER for statics (use pthread_mutex_init() for stack/heap memory)
#define SPACES 10
pthread_mutex_t m = PTHREAD_MUTEX_INITIALIZER;
int count = 0;
double values[SPACES];
sem_t sitems, sremain;

void init()
{
    sem_init(&sitems, 0, 0);
    sem_init(&sremains, 0, SPACES); // 10 spaces
}

double pop()
{
    // Wait until there's at least one item
    P(&sitems);

    pthread_mutex_lock(&m); // CRITICAL SECTION
    double v = values[--count];
    pthread_mutex_unlock(&m);

    V(&sremain); // Hey world, there's at least one space
    return v;
}

void push(double v)
{
    // Wait until there's at least one space
    P(&sremain);

    pthread_mutex_lock(&m); // CRITICAL SECTION
    values[count++] = v;
    pthread_mutex_unlock(&m);

    V(&sitems); // Hey world, there's at least one item
}
// Note a robust solution will need to check sem_wait's result for EINTR (more about this later)