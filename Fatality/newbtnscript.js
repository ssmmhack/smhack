function array(rows, columns){
	var arr = new Array(rows);
    for(var i = 0; i < rows; i++){
    	arr[i] = new Array(colums);
    }
    return arr;
}
var arr = array(3, 32);
for(var i=0;i<3;i++){
    for(var j=0;j<32;j++){
        arr[i][j] = 0;
    }
}