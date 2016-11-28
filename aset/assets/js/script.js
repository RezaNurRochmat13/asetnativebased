function tambah(){
$(".table-common").append('<tr id="itemiden"><td> <input type="text" name="item[]"></td><td><input type="text" name="nominal[]"></td></tr>').children(':last');
}