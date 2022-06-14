const hand = 'handler.php';
const perg2 = document.getElementById('perg2');
const bot2  = document.getElementById('botPerg2');
const resp2 = document.getElementById('resp2');
const resp3 = document.getElementById('resp3');
const resp4 = document.getElementById('resp4');
const perg5 = document.getElementById('perg5');
const bot5  = document.getElementById('botPerg5');
const resp5 = document.getElementById('resp5');

bot2.addEventListener('click',(e)=>{
    e.preventDefault();
    let fd = new FormData(perg2);
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = ()=>{
        if(xhr.status === 200 && xhr.readyState ===4)
            resp2.innerHTML = xhr.responseText;
    }
    xhr.open('POST', hand);
    xhr.send(fd);
});

if(resp3){
    let fd = new FormData();
    fd.append('perg3','sim');
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = ()=>{
        if(xhr.status === 200 && xhr.readyState ===4)
            resp3.innerHTML = xhr.responseText;
    }
    xhr.open('POST', hand);
    xhr.send(fd);
}

if(resp4){
    let fd = new FormData();
    fd.append('perg4','sim');
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = ()=>{
        if(xhr.status === 200 && xhr.readyState ===4)
            resp4.innerHTML = xhr.responseText;
    }
    xhr.open('POST', hand);
    xhr.send(fd);
}

bot5.addEventListener('click',(e)=>{
    e.preventDefault();
    let fd = new FormData(perg5);
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = ()=>{
        if(xhr.status === 200 && xhr.readyState ===4)
            resp5.innerHTML = xhr.responseText;
    }
    xhr.open('POST', hand);
    xhr.send(fd);
});