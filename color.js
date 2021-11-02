var Linkss={
    linkssetColor: function(color){
        var links = document.querySelectorAll('a');
        var i = 0;
        while (i < links.length) {
            links[i].style.color = color;
            i = i + 1;
        }
    }
}

var Body = {
    bodysetColor: function(color){
        document.querySelector('body').style.color = color;
    },
    bodysetBackground: function(color){
        document.querySelector('body').style.backgroundColor = color;
    }

}

function nightDayHandler(self) {
    if (self.value === 'night') {
        Body.bodysetBackground('black');
        Body.bodysetColor('white');
        self.value = 'day';
        Linkss.linkssetColor('powderblue');
    }
    else {
        Body.bodysetBackground('white');
        Body.bodysetColor('black');
        self.value = 'night';
        Linkss.linkssetColor('blue');    
    }
}