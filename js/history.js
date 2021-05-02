$(document).ready(function(){
    console.log("enter")
    let ul = document.createElement('ul')
    ul.classList.add('histories')
    ul.style.cssText = `
    display:flex;
    color:orange
    `

    let nav = document.querySelector('header')
    nav.append(ul)
    // //在body最前面添加一个足迹栏
    // document.body.prepend(ul)
    let history_list = document.querySelector('.histories');
    let histories = JSON.parse(localStorage.getItem('histories')) || [];


    //判断是否已经加入了
    var result = histories.some(history=>{
        if(history.title==document.title){
            return true ;
        } 
    })

    function add() {
        const history = {
            title:document.title,
            url:document.URL
        }
        
        histories.push(history);

        // console.log(JSON.stringify(histories))
        

        localStorage.setItem('histories', JSON.stringify(histories));
        
    }

    function populateList(histories = [], history_list) {
        
        // console.log(histories);


        history_list.innerHTML = histories.map((history,i) => {
            return `
            <li id="history${i}">
                <a href=${history.url} style="color:orange">${history.title}</a>
            </li>
            `;
        }).join(' > ');
    }
    if (!result) {
        add();
        //如果有超过三个不同的足迹 则只取最后三个
        if (histories.length > 3) {
            histories = histories.slice(-3)
        }
        console.log('a')
        populateList(histories, history_list);
    } else {
        //如果已经在足迹栏中了，找到它的索引，将索引在它之后的清除
        let needclear = 0;
        histories.forEach((history, index) => {
            if(history.title==document.title){
                needclear = index + 1;
            } 
        });
        console.log('b')
        histories = histories.slice(0, needclear)
        localStorage.setItem('histories', JSON.stringify(histories));
        // console.log(histories)
        populateList(histories,history_list)
    }
})