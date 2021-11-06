var arr=new Array("동대문","동대문역사문화공원","충무로","명동","회현","서울역","숙대입구","삼각지",
"신용산","이촌","동작","총신대입구(이수)","사당")
function makeOption(){
    for (i=0;i<arr.length;i++){
        document.write("<option>"+arr[i]+"</option>");
    }
}

function agreeAlert(agree){
    if (agree=="disagree"){
        alert("동의해야됨")
    }
}


Map = function(){
    this.map = new Object();
   };  
   Map.prototype = {  
       put : function(key, value){  
           this.map[key] = value;
       },  
       get : function(key){  
           return this.map[key];
       },
       containsKey : function(key){   
        return key in this.map;
       },
       containsValue : function(value){   
        for(var prop in this.map){
         if(this.map[prop] == value) return true;
        }
        return false;
       },
       isEmpty : function(key){   
        return (this.size() == 0);
       },
       clear : function(){  
        for(var prop in this.map){
         delete this.map[prop];
        }
       },
       remove : function(key){   
        delete this.map[key];
       },
       keys : function(){  
           var keys = new Array();  
           for(var prop in this.map){  
               keys.push(prop);
           }  
           return keys;
       },
       values : function(){  
        var values = new Array();  
           for(var prop in this.map){  
            values.push(this.map[prop]);
           }  
           return values;
       },
       size : function(){
         var count = 0;
         for (var prop in this.map) {
           count++;
         }
         return count;
       }
   };
   
   
   
 