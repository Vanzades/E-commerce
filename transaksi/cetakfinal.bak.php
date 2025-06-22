<?php
    include "../controllers/Transaksi.php";
    include "../lib/functions.php";
    $obj   = new TransaksiController();
    $rows  = $obj->gettransaksiList();
	$mpdf = new \Mpdf\Mpdf();
$html ='<!DOCTYPE html>

<html>
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 24.8.4.2 (Windows)"/>
	<meta name="created" content="2025-01-30T15:44:42.661000000"/>
	<meta name="changed" content="2025-02-04T17:51:14.624000000"/>
	
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Liberation Sans"; font-size:x-small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  } 
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  } 
		comment { display:none;  } 
	</style>
	
</head>

<body>
<table cellspacing="0" border="0">
	<colgroup width="43"></colgroup>
	<colgroup width="289"></colgroup>
	<colgroup width="203"></colgroup>
	<colgroup width="291"></colgroup>
	<colgroup width="217"></colgroup>
	<colgroup width="210"></colgroup>
	<tr>
		<td colspan=5 rowspan=18 height="307" align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br><img src="cetakfinal_html_2e5be46c.png" width=1004 height=295 hspace=22 vspace=15>
		</td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="67" align="left" valign=top data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Arial Black" size=5><br></font></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Arial Black" size=7><br></font></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Arial Black" size=7><br></font></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="17" align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="13" align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="13" align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" height="23" align="center" valign=middle data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;ID&quot;}"><b><font face="Sans Serif Collection" size=4>ID</font></b></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" valign=middle data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;KODE TRANSAKSI&quot;}"><b><font face="Sans Serif Collection" size=4>KODE TRANSAKSI</font></b></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" valign=middle data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;KODE BARANG&quot;}"><b><font face="Sans Serif Collection" size=4>KODE BARANG</font></b></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" valign=middle data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;JUMLAH&quot;}"><b><font face="Sans Serif Collection" size=4>JUMLAH</font></b></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" valign=middle data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;JENIS TRANSAKSI&quot;}"><b><font face="Sans Serif Collection" size=4>JENIS TRANSAKSI</font></b></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" valign=middle data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;TANGGAL&quot;}"><b><font face="Sans Serif Collection" size=4>TANGGAL</font></b></td>
	</tr>';
	foreach ($rows as $row) {
	
		$html .='
	<tr>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" height="23" align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Sans Serif Collection" size=4><br>'.$row["id"].'</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Sans Serif Collection" size=4><br></font>'.$row["kode_transaksi"].'</td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Sans Serif Collection" size=4><br></font>'.$row["kode_barang"].'</td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Sans Serif Collection" size=4><br></font>'.$row["jumlah"].'</td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Sans Serif Collection" size=4><br></font>'.$row["jenis_transaksi"].'</td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Sans Serif Collection" size=4><br>'.$row["tanggal"].'	</tr>';
	}
	$html .='
</table>
<!-- ************************************************************************** -->
</body>

</html>';
// Write HTML to PDF
$mpdf->WriteHTML($html);

// Set the filename for inline display
$filename = "laporan_film.pdf";

// Output the PDF for inline display
$mpdf->Output($filename, 'I');
?>
