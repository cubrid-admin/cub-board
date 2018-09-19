
<HTML>
<Body>
<style>
  table {
    width: 100%;
    border: 1px solid #444444;
  }
</style>

<Table>
<Tr align=center style='background:gray;color:white;border:1px solid'>
<Td>ID</Td>
<Td>Name</Td>
<Td>Status</Td>
<Td>Title</Td>
<Td>Created</Td>
<Td>Updated</Td>
</Tr>

<?php
$conn = cubrid_connect_with_url("CUBRID:localhost:33000:joomla:dba::", "dba", "");

if (!$conn) {
    printf("cubrid_connect: [%d] %s\n", cubrid_errno($conn), cubrid_error($conn));
    exit(1);
}

if (!$req = cubrid_query("select * from cub_board", $conn)) {
    printf("cubrid_query: [%d] %s\n", cubrid_errno($conn), cubrid_error($conn));
}

while ($row = cubrid_fetch($req))
{
	echo "<Tr align=center style='background:#eeeeee;border:1px solid'>";
	echo "<Td align=center>$row[0]</Td>";
	echo "<Td align=Left>$row[1]</Td>";
	echo "<Td align=center>$row[2]</Td>";
	echo "<Td align=left>$row[3]</Td>";
	echo "<Td align=center>$row[5]</Td>";
	echo "<Td align=center>$row[6]</Td>";
	echo "</Tr>";
}
?>
</Table>
</Body>
</HTML>
