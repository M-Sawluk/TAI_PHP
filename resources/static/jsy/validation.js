function spr(){
    var ok = true;
    imieNazwisko = /^[a-zA-Z]{2,15}[ ][a-zA-Z]{2,15}$/;
    obiektemail =/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
    
    var arrOfEle = [$('#imie'),$('#Samochod'),$('#Miasto'),
               $('#email'),$('#datetimepicker1'),
               $('#datetimepicker2'),$('#pekao'),$('#mbank')];
    
    var arrOfLab = [$('#1'),$('#2'),$('#3'),$('#4'),$('#5'),
                   $('#6'),$('#7')];
    
    var today = new Date();

    if(!imieNazwisko.test(arrOfEle[0].val())){
        arrOfEle[0].addClass("bounce-left").addClass("red-border");
        arrOfLab[0].text("Niepoprawne dane! Przykład: Michał Sawłuk")
        .addClass("red-class");     
        ok=false;
    }
    else{
        if(arrOfEle[0].hasClass("red-border")){
        arrOfEle[0].toggleClass("red-border");
        arrOfLab[0].toggleClass("red-class").text("Imię i nazwisko poprawne!");
        }
    }

    if(arrOfEle[1].val()==null){
        arrOfEle[1].addClass("bounce-left").addClass("red-border");
        arrOfLab[1].text("Proszę wybrać samochód!")
        .addClass("red-class");     
        ok=false;
    }
    else{
        if(arrOfEle[1].hasClass("red-border")){
        arrOfEle[1].toggleClass("red-border");
        arrOfLab[1].toggleClass("red-class").text("Poprawny wybór!");
        }
    }
    
    if(arrOfEle[2].val()==null){
        arrOfEle[2].addClass("bounce-left").addClass("red-border");
        arrOfLab[2].text("Proszę wybrać miasto!")
        .addClass("red-class");     
        ok=false;
    }
    else{
        if(arrOfEle[2].hasClass("red-border")){
        arrOfEle[2].toggleClass("red-border");
        arrOfLab[2].toggleClass("red-class").text("Poprawny wybór!");
        }
    }

    if(!obiektemail.test(arrOfEle[3].val())){
        arrOfEle[3].addClass("bounce-left").addClass("red-border");
        arrOfLab[3].text("Niepoprawny email! Przykład: example@.gmail.com")
        .addClass("red-class");     
        ok=false;
    }
    else{
        if(arrOfEle[3].hasClass("red-border")){
        arrOfEle[3].toggleClass("red-border");
        arrOfLab[3].toggleClass("red-class").text("Teraz ok!");
        }
    }
       
    if(arrOfEle[4].val()=="" || new Date(arrOfEle[4].val())<today){
        arrOfEle[4].addClass("bounce-left").addClass("red-border");
        arrOfLab[4].text("Lepiej wybierz date z przyszłości!")
        .addClass("red-class");     
        ok=false;
    }
    else{
        if(arrOfEle[4].hasClass("red-border")){
        arrOfEle[4].toggleClass("red-border");
        arrOfLab[4].toggleClass("red-class").text("Teraz ok!");
        }
    }
    
    if(arrOfEle[5].val()==""|| new Date(arrOfEle[5].val())<today){
        arrOfEle[5].addClass("bounce-left").addClass("red-border");
        arrOfLab[5].text("Lepiej wybierz date z przyszłości!")
        .addClass("red-class");     
        ok=false;
    }
    else{
        if(arrOfEle[5].hasClass("red-border")){
        arrOfEle[5].toggleClass("red-border");
        arrOfLab[5].toggleClass("red-class").text("Teraz ok!");
        }
    }
    
    if(new Date(arrOfEle[5].val())<new Date(arrOfEle[4].val()) 
       || arrOfEle[5].val()==""){
        arrOfEle[5].addClass("bounce-left").addClass("red-border");
        arrOfLab[5].text("Czas nie płynie wstecz!")
        .addClass("red-class");     
        ok=false;
    }
    else{
        if(arrOfEle[5].hasClass("red-border")){
        arrOfEle[5].toggleClass("red-border");
        arrOfLab[5].toggleClass("red-class").text("Teraz ok!");
        }
    }
    
    if(!arrOfEle[6].is(":checked") && !arrOfEle[7].is(":checked")){
        arrOfLab[6].text("Wybierz sposób zapłaty!")
        .addClass("red-class");   
        ok=false;
    }
    else{
        if(arrOfLab[6].hasClass("red-class")){
        arrOfLab[6].toggleClass("red-class").text("Teraz ok!");
        }
    }
    
    setTimeout(function(){
        for(var i=0;i<arrOfEle.length;i++){
            if(arrOfEle[i].hasClass("bounce-left"))
                arrOfEle[i].toggleClass("bounce-left");
        }
    },800);
    

    
    if(ok)
        addToLocalStorage(arrOfEle);

  
    return ok;
}

function addToLocalStorage(array){

    localStorage.setItem("imieINazwisko" , array[0].val());
    localStorage.setItem("samochod" , array[1].val());
    localStorage.setItem("miasto" , array[2].val());
    localStorage.setItem("email" , array[3].val());
    localStorage.setItem("data1" , array[4].val());
    localStorage.setItem("data2" , array[5].val());
    localStorage.setItem("pekao" , array[6].is(":checked"));
    localStorage.setItem("mbank" , array[7].is(":checked"));
       
}

function loadFromLocalStorage(){
    
    var arrOfEle = [$('#imie'),$('#Samochod'),$('#Miasto'),
               $('#email'),$('#datetimepicker1'),
               $('#datetimepicker2'),$('#pekao'),$('#mbank')];

    arrOfEle[0].val(localStorage.getItem("imieINazwisko"));
    arrOfEle[1].val(localStorage.getItem("samochod"));
    arrOfEle[2].val(localStorage.getItem("miasto"));
    arrOfEle[3].val(localStorage.getItem("email"));
    arrOfEle[4].val(localStorage.getItem("data1"));
    arrOfEle[5].val(localStorage.getItem("data2"));
    
    if(localStorage.getItem("pekao")==="true")
        arrOfEle[6].prop("checked",true);
    else if(localStorage.getItem("mbank")==="true")
        arrOfEle[7].prop("checked",true);
}

$("#load").click(function(){
    loadFromLocalStorage();
})

