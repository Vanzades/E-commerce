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
	<meta name="changed" content="2025-01-30T16:14:15.555000000"/>
	
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
	<colgroup width="214"></colgroup>
	<colgroup width="291"></colgroup>
	<colgroup width="217"></colgroup>
	<colgroup width="210"></colgroup>
	<colgroup width="221"></colgroup>
	<tr>
		<td height="17" align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td rowspan=16 align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br><img src="cetak_html_1a362400.png" width=257 height=261 hspace=16 vspace=13>
		</td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
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
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="17" align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
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
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="17" align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
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
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="17" align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
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
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="17" align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
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
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="17" align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
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
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="17" align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
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
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="17" align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
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
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="17" align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
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
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="67" align="left" valign=top data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;DAFTAR TRANSAKSI BARANG MASUK &amp; KELUAR&quot;}"><font face="Arial Black" size=7>DAFTAR TRANSAKSI BARANG MASUK &amp; KELUAR</font></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Arial Black" size=7><br></font></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Arial Black" size=7><br></font></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Arial Black" size=7><br></font></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
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
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" height="23" align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;ID&quot;}"><font face="Arial" size=4>ID</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;KODE TRANSAKSI&quot;}"><font face="Arial" size=4>KODE TRANSAKSI</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;KODE BARANG&quot;}"><font face="Arial" size=4>KODE BARANG</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;WAJAH PEMASOK&quot;}"><font face="Arial" size=4>WAJAH PEMASOK</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;JUMLAH&quot;}"><font face="Arial" size=4>JUMLAH</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;JENIS TRANSAKSI&quot;}"><font face="Arial" size=4>JENIS TRANSAKSI</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;TANGGAL&quot;}"><font face="Arial" size=4>TANGGAL</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;FOTO BARANG&quot;}"><font face="Arial" size=4>FOTO BARANG</font></td>
	</tr>';
	foreach ($rows as $row) {
	
		$html .='
	<tr>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" height="23" align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Arial" size=4><br>'.$row["id"].'</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Arial" size=4><br>'.$row["kode_transaksi"].'</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Arial" size=4><br>'.$row["kode_barang"].'</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Arial" size=4><br></font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Arial" size=4><br>'.$row["jumlah"].'</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Arial" size=4><br>'.$row["jenis_transaksi"].'</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Arial" size=4><br>'.$row["tanggal"].'</font></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Arial" size=4><br><img src="'.$row["foto"].'" alt="images"></font></td>

		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="left" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>';
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