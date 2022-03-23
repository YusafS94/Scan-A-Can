<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Dynamsoft JavaScript Barcode Scanner</title>
    <script src="https://cdn.jsdelivr.net/npm/dynamsoft-javascript-barcode@8.8.7/dist/dbr.js"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #barcodeScanner {
            text-align: center;
            font-size: medium;
            height: 40vh;
            width: 40vw;
        }
    </style>
</head>
<?php
<body>
    <div>
        <h1>Barcode Result:</h1> <a id='result'>N/A</a>
    </div>


    <div>
      Barcode Result: <a id='result'>N/A</a>
    </div>
    <div id="barcodeScanner">
        <span id='loading-status' style='font-size:x-large'>Loading Library...</span>
    </div>
    <script>
        // Make sure to set the key before you call any other APIs under Dynamsoft.DBR
        //You can register for a free 30-day trial here: https://www.dynamsoft.com/customer/license/trialLicense?product=dbr&deploymenttype=browser.
        Dynamsoft.DBR.BarcodeReader.productKeys = "LICENSE-KEY";

        window.onload = async function () {
            try {
                await Dynamsoft.DBR.BarcodeScanner.loadWasm();
                await initBarcodeScanner();
            } catch (ex) {
                alert(ex.message);
                throw ex;
            }
        };
        let scanner = null;
        async function initBarcodeScanner() {
            scanner = await Dynamsoft.DBR.BarcodeScanner.createInstance();
            scanner.onFrameRead = results => {
                console.log(results);
                for (let result of results) {
                    document.getElementById('result').innerHTML =  result.barcodeText;
                }
            };
            scanner.onUnduplicatedRead = (txt, result) => { };
            scanner._drawRegionsults = function (e) {
                let t, i, n;
                if (this.beingLazyDrawRegionsults = !1,
                    this.singleFrameMode) {
                    if (!this.oriCanvas)
                        return;
                    t = "contain",
                        i = this.oriCanvas.width,
                        n = this.oriCanvas.height
                } else {
                    if (!this.dce.video)
                        return;
                    t = this.dce.video.style.objectFit || "contain",
                        i = this.dce.video.videoWidth,
                        n = this.dce.video.videoHeight
                }
                let s = this.region;
                if (s && (!s.regionLeft && !s.regionRight && !s.regionTop && !s.regionBottom && !s.regionMeasuredByPercentage || s instanceof Array ? s = null : s.regionMeasuredByPercentage ? s = s.regionLeft || s.regionRight || 100 !== s.regionTop || 100 !== s.regionBottom ? {
                    regionLeft: Math.round(s.regionLeft / 100 * i),
                    regionTop: Math.round(s.regionTop / 100 * n),
                    regionRight: Math.round(s.regionRight / 100 * i),
                    regionBottom: Math.round(s.regionBottom / 100 * n)
                } : null : (s = JSON.parse(JSON.stringify(s)),
                    delete s.regionMeasuredByPercentage)),
                    this._cvsDrawArea) {
                    this._cvsDrawArea.style.objectFit = t;
                    let r = this._cvsDrawArea;
                    r.width = i,
                        r.height = n;
                    let o = r.getContext("2d");
                    if (s) {
                        o.fillStyle = this.regionMaskFillStyle,
                            o.fillRect(0, 0, r.width, r.height),
                            o.globalCompositeOperation = "destination-out",
                            o.fillStyle = "#000";
                        let e = Math.round(this.regionMaskLineWidth / 2);
                        o.fillRect(s.regionLeft - e, s.regionTop - e, s.regionRight - s.regionLeft + 2 * e, s.regionBottom - s.regionTop + 2 * e),
                            o.globalCompositeOperation = "source-over",
                            o.strokeStyle = this.regionMaskStrokeStyle,
                            o.lineWidth = this.regionMaskLineWidth,
                            o.rect(s.regionLeft, s.regionTop, s.regionRight - s.regionLeft, s.regionBottom - s.regionTop),
                            o.stroke()
                    }
                    if (e) {
                        o.globalCompositeOperation = "destination-over",
                            o.fillStyle = this.barcodeFillStyle,
                            o.strokeStyle = this.barcodeStrokeStyle,
                            o.lineWidth = this.barcodeLineWidth,
                            e = e || [];
                        for (let t of e) {
                            let e = t.localizationResult;
                            o.beginPath(),
                                o.moveTo(e.x1, e.y1),
                                o.lineTo(e.x2, e.y2),
                                o.lineTo(e.x3, e.y3),
                                o.lineTo(e.x4, e.y4),
                                o.fill(),
                                o.beginPath(),
                                o.moveTo(e.x1, e.y1),
                                o.lineTo(e.x2, e.y2),
                                o.lineTo(e.x3, e.y3),
                                o.lineTo(e.x4, e.y4),
                                o.closePath(),
                                o.stroke()

                            let text = t.barcodeText;
                            o.font = '18px Verdana';
                            o.fillStyle = '#ff0000';
                            let x = [e.x1, e.x2, e.x3, e.x4];
                            let y = [e.y1, e.y2, e.y3, e.y4];
                            x.sort(function (a, b) {
                                return a - b;
                            });
                            y.sort(function (a, b) {
                                return b - a;
                            });
                            let left = x[0];
                            let top = y[0];

                            o.fillText(text, left, top + 50);
                        }
                    }
                    this.singleFrameMode && (o.globalCompositeOperation = "destination-over",
                        o.drawImage(this.oriCanvas, 0, 0))
                }
                if (this._divScanArea && this.dce.video) {
                    let e = this.dce.video.offsetWidth
                        , t = this.dce.video.offsetHeight
                        , r = 1;
                    e / t < i / n ? (r = e / i,
                        this._divScanArea.style.left = "0",
                        this._divScanArea.style.top = Math.round((t - n * r) / 2) + "px") : (r = t / n,
                            this._divScanArea.style.left = Math.round((e - i * r) / 2) + "px",
                            this._divScanArea.style.top = "0");
                    let o = s ? Math.round(s.regionLeft * r) : 0
                        , a = s ? Math.round(s.regionTop * r) : 0
                        , d = s ? Math.round(s.regionRight * r - o) : Math.round(i * r)
                        , l = s ? Math.round(s.regionBottom * r - a) : Math.round(n * r);
                    this._divScanArea.style.marginLeft = o + "px",
                        this._divScanArea.style.marginTop = a + "px",
                        this._divScanArea.style.width = d + "px",
                        this._divScanArea.style.height = l + "px"
                }
            }
            document.getElementById('barcodeScanner').appendChild(scanner.getUIElement());
            document.getElementById('loading-status').hidden = true;
            document.getElementsByClassName('dce-sel-camera')[0].hidden = true;
            document.getElementsByClassName('dce-sel-resolution')[0].hidden = true;
            document.getElementsByClassName('dce-btn-close')[0].hidden = true;
            await scanner.show();
        }
    </script>

    <h1>Hello</h1>

    ?>
</body>

</html>