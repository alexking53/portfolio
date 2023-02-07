var ps=document.querySelector('#div3');
var clic=function(){
    var httpRequest = new XMLHttpRequest();    
    httpRequest.onreadystatechange = function(){
        if (httpRequest.readyState === 4){
            if(httpRequest.status===200){	
                document.querySelector('#div3').innerHTML=httpRequest.responseText ;
            }
        }
    };
    
    httpRequest.open('GET',"MessageAjax.php?var=essai gagnant !",true);
    httpRequest.send();    
};
ps.addEventListener('click',clic);