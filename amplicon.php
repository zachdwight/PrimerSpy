<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<title>PrimerSPY for Small Amplicon Primer Design | All Rights Reserved | dna-utah.org</title>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-28398796-1');
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script>
function uDesignCall(){
var sequence = document.getElementById("template").value;
var mono = document.getElementById("mono").value;
var mg = document.getElementById("mg").value;
//var dntp = document.getElementById("dntp").value;

sequence = sequence.toUpperCase();
var fid = sequence.indexOf("["); var freg = sequence.substring(fid-50,fid);
var rid = sequence.indexOf("]")+1; var rreg = sequence.substring(rid,rid+50);
var uberseq = freg+'x'+rreg;
uberseq = uberseq.split(' ').join(''); 
var mainURL = ";)";

var tmURL = mainURL + "seq="+uberseq+"&rs=0&cation="+mono+"&mg="+mg+"&dmso=0"+ "&token=" + ";)";
  $.get(tmURL, function(data, status){
    
                    var assay = data.split(",");					
					document.getElementById("result").value = 'Forward Primer: ' + assay[0] + "\n";
                    document.getElementById("result").value += '--> Tm: ' + assay[1].substring(0,4)+ "°C\n";
                    document.getElementById("result").value += 'Reverse Primer: ' + assay[2]+ "\n";
                    document.getElementById("result").value += '--> Tm: ' + assay[3].substring(0,4)+ "°C\n";
                    
					
                    
                    
                });
                
                

}


</script>

</head>




<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        <i class="fas fa-user-secret"></i> PrimerSPY <sup>sm</sup> v2.2b
      </h3>

      <div class="blog-post">
        <h2 class="blog-post-title">Template Sequence</h2>
        <textarea id="template" rows="4" cols="50" maxlength="450">
ATCGTACGTACGTACGACATATTATATCGTCGCGCGCGCTACGTACG[G]ATGCTACGTAAAAAATCGATCGTACGATCGTACGTACGTACGTAGCTAGCTAGCAC
</textarea>

        <hr>
        <h2>Design</h2>
        <textarea id="result" rows="4" cols="50">
Use the 'Parameters' box to the right to display primers for the template above.  Areas within brackets '[ ]' are primer restricted.
</textarea>
      </div><!-- /.blog-post -->

     

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">Parameters</h4><hr>
        <p class="mb-0">
                <table>
    <tr><td>[Mono+]</td><td><textarea id="mono" rows="1" cols="6">20.0</textarea></td><td>mM</td></tr>
    <tr><td>[Mg++]</td><td><textarea id="mg" rows="1" cols="6">3.0</textarea></td><td>mM</td></tr>
    <tr><td>Therm.</td><td><textarea id="library" rows="1" cols="15" disabled>1998 Unified SL</textarea></td><td></td></tr>
   

</table><hr><button onclick="uDesignCall()">Run >></button>
        </p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">References</h4><hr>
        <ol class="list-unstyled mb-0">
          <li><a href="https://pubmed.ncbi.nlm.nih.gov/9465037-a-unified-view-of-polymer-dumbbell-and-oligonucleotide-dna-nearest-neighbor-thermodynamics/">SantaLucia, Jr. (1998)</a></li>
          <li><a href="https://pubs.acs.org/doi/full/10.1021/bi702363u">Owzcarzy et al. (2008) </a></li>
          <li><a href="https://dna-utah.org/Posters/amp2013/uDesign_Poster_AMP_ZLD_Update.pdf">Dwight et al. (2013)</a></li>
  
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Contact</h4><hr>
        zach@dna-utah.org
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->


<footer class="blog-footer" >
  <h6 class="pb-4 mb-4 font-italic border-top">Updated Aug 27th, 2020 </h6>
</footer>
</body>
</html>
