var form_handling = function () {
 this.rowCount = 0;
};


form_handling.prototype.deleteRow = function(tableID){
  var table = document.getElementById(tableID);
    table.deleteRow(this.rowCount);
    this.rowCount--;
};

form_handling.prototype.addRow = function(tableID){
  var table = document.getElementById(tableID);
  this.rowCount = table.rows.length;
  if(this.rowCount < 10000){                            // limit the user from creating fields more than your limits
    var row = table.insertRow(this.rowCount);
    var colCount = table.rows[0].cells.length;
    for(var i=0; i<colCount; i++) {
      var newcell = row.insertCell(i);
      this.rowCount = i;
      newcell.innerHTML = table.rows[0].cells[i].innerHTML;
    }
  }else{
     alert("Maximum Passenger per ticket is 5");
         
  }
};



 
