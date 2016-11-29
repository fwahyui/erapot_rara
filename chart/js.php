<script>
var Jabatan = 
{
	labels : ["","Kepsek","Guru Kelas","Guru Penjas","Guru Agama","Guru Mapel","Penjaga"],
	datasets : 
	[
		
		{
			fillColor : "rgba(151,187,205,1)",
			strokeColor : "rgba(151,187,205,1)",
			pointColor : "rgba(151,187,205,1)",
			pointStrokeColor : "#fff",
			data : [0,<?php echo $ks;?>,<?php echo $gk;?>,<?php echo $gp;?>,<?php echo $ga;?>,
			<?php echo $gm;?>,<?php echo $p;?>]
		}
	]
	
}
var myLine = new Chart(document.getElementById("line").getContext("2d")).Line(Jabatan);
var Status = 
{
	labels : ["","PNS","CPNS","GTT","Sukwan"],
	datasets : 
	[
		
		{
			fillColor : "rgba(151,187,205,1)",
			strokeColor : "rgba(151,187,205,1)",
			pointColor : "rgba(151,187,205,1)",
			pointStrokeColor : "#fff",
			data : [0,<?php echo $pns;?>,<?php echo $cpns;?>,<?php echo $gtt;?>,0]
		}
	]
	
}
var myPie = new Chart(document.getElementById("pie").getContext("2d")).Line(Status);
</script>