@include('header')
@include('blocks/navigation')

<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" >{{ $filename }}</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section">
    <div class="container">
    <div id="adobe-dc-view" style="width: 100%;"></div>
    </div>
</section>



<script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
<script type="text/javascript">
    document.addEventListener("adobe_dc_view_sdk.ready", function(){ 
        var adobeDCView = new AdobeDC.View({clientId: "2d68314ab5814d53a72917ff4b48e569", divId: "adobe-dc-view"});
        var route =  "{{ $pdfPath }}";
        console.log(route);
        adobeDCView.previewFile({
            content:{location: {url: route}},
            metaData:{fileName: "{{ $filename }}"}
        }, {embedMode: "IN_LINE", showDownloadPDF: false, showPrintPDF: false});
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    var pdfPath = "{{ $pdfPath }}";
    console.log('pdfPath', pdfPath);
    var pdfjsLib = window['pdfjs-dist/build/pdf'];

    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.worker.min.js';

    var loadingTask = pdfjsLib.getDocument(pdfPath);
    loadingTask.promise.then(function(pdf) {
        // Fetch the first page
        pdf.getPage(1).then(function(page) {
            var scale = 1.5;
            var viewport = page.getViewport({ scale: scale });

            // Prepare canvas using PDF page dimensions
            var canvas = document.createElement('canvas');
            var context = canvas.getContext('2d');
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            // Render PDF page into canvas context
            var renderContext = {
                canvasContext: context,
                viewport: viewport
            };
            page.render(renderContext).promise.then(function() {
                document.getElementById('pdf-container').appendChild(canvas);
            });
        });
    }, function(reason) {
        console.error('Error: ' + reason);
    });
});
</script>

@include('blocks/footer')
@include('footer')