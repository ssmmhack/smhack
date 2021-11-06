function array(rows, columns){
	var arr = new Array(rows);
    for(var i = 0; i < rows; i++){
    	arr[i] = new Array(colums);
    }
    return arr;
}
var arr = array(3, 32);