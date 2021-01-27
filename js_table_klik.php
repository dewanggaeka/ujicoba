<table id="my-table-id" border=1>
 <tbody style="cursor:pointer">
  <tr><td>row one</td></tr>
  <tr><td>row two</td></tr>
  <tr><td>row three</td></tr>
 </tbody>
</table>

<script type="text/javascript">
	
	function onRowClick(tableId, callback) {
    var table = document.getElementById(tableId),
        rows = table.getElementsByTagName("tr"),
        i;
    for (i = 0; i < rows.length; i++) {
        table.rows[i].onclick = function (row) {
            return function () {
                callback(row);
            };
        }(table.rows[i]);
    }
};
 
onRowClick("my-table-id", function (row){
    var value = row.getElementsByTagName("td")[0].innerHTML;
    document.getElementById('click-response').innerHTML = value + " clicked!";
    console.log("value>>", value);
});
</script>