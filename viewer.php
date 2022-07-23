<?php
require_once 'php/main.php';
?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Prohlížeč modelů</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/viewer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/plasticbuttons.css">
    <script src="./libs/gl-matrix.js"></script>
    <script src="./libs/webgl-utils.js"></script>
    <script type="text/javascript" src="./Viewer/xbim-product-type.debug.js"></script>
    <script type="text/javascript" src="./Viewer/xbim-state.debug.js"></script>
    <script type="text/javascript" src="./Viewer/xbim-shaders.debug.js"></script>
    <script type="text/javascript" src="./Viewer/xbim-model-geometry.debug.js"></script>
    <script type="text/javascript" src="./Viewer/xbim-model-handle.debug.js"></script>
    <script type="text/javascript" src="./Viewer/xbim-binary-reader.debug.js"></script>
    <script type="text/javascript" src="./Viewer/xbim-triangulated-shape.debug.js"></script>
    <script type="text/javascript" src="./Viewer/xbim-viewer.debug.js"></script>
    <script src="./libs/jquery.js"></script>
    <script src="./js/xbim-viewer.js"></script>
</head>

<body style="background-color: #F5F5F5;">
    <div style="color: (255,255,255)" id="fps">
        FPS : <span id="fps"></span>
    </div>
    <div id="navigator">

        <div id="selectedId">
            ID vybraného prvku : <span id="pickedId"></span>
        </div>

        <div id="default-views">
            Základní pohledy (nevybírat prvek) :
            <button class="small button" onclick="if (viewer) viewer.show('front');">Přední</button>
            <button class="small button" onclick="if (viewer) viewer.show('back');">Zadní</button>
            <button class="small button" onclick="if (viewer) viewer.show('top');">Horní</button>
            <button class="small button" onclick="if (viewer) viewer.show('bottom');">Spodní</button>
            <button class="small button" onclick="if (viewer) viewer.show('left');">Levý</button>
            <button class="small button" onclick="if (viewer) viewer.show('right');">Pravý</button>
        </div>
        <div id="zoom-to">
            Přiblížení na :
            <button class="small button" onclick="if (viewer) viewer.zoomTo(pickedId)">Vybraný prvek</button>
            <button class="small button" onclick="if (viewer) viewer.zoomTo()">Plné zobrazení</button>
        </div>
        <div id="hide">
            Zobrazení vybraných :
            <button class="small button" onclick="if (viewer) viewer.resetStates(false)">Zobrazení vše</button>
            <button class="small button" onclick="if (viewer) {
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCDISTRIBUTIONELEMENT)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCDISTRIBUTIONFLOWELEMENT)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCFLOWCONTROLLER)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCELECTRICDISTRIBUTIONPOINT)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCDISTRIBUTIONCONTROLELEMENT)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCDISTRIBUTIONPORT)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCENERGYCONVERSIONDEVICE)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCFLOWFITTING)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCFLOWMOVINGDEVICE)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCFLOWSEGMENT)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCFLOWSTORAGEDEVICE)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCFLOWTERMINAL)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCFLOWTREATMENTDEVICE)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCCHAMFEREDGEFEATURE)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCDISCRETEACCESSORY)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCFASTENER)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCMECHANICALFASTENER)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCROUNDEDEDGEFEATURE)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSTRUCTURALCURVECONNECTION)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSTRUCTURALCURVEMEMBER)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSTRUCTURALCURVEMEMBERVARYING)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSTRUCTURALLINEARACTION)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSTRUCTURALLINEARACTIONVARYING)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSTRUCTURALPLANARACTION)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSTRUCTURALPLANARACTIONVARYING)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSTRUCTURALPOINTACTION)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSTRUCTURALPOINTCONNECTION)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSTRUCTURALPOINTREACTION)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSTRUCTURALSURFACECONNECTION)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSTRUCTURALSURFACEMEMBER)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSTRUCTURALSURFACEMEMBERVARYING)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCFOOTING)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCPILE)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCREINFORCINGBAR)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCREINFORCINGMESH)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCTENDON)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCTENDONANCHOR)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSTAIRFLIGHT)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCBUILDINGELEMENTPART)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCANNOTATION)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCBUILDINGSTOREY)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCGRID)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCOPENINGELEMENT)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCPROJECTIONELEMENT)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCBEAM)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCBUILDING)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCBUILDINGELEMENTPROXY)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCCOLUMN)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCCOVERING)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCCURTAINWALL)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCDOOR)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCELECTRICALELEMENT)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCELEMENTASSEMBLY)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCEQUIPMENTELEMENT)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCFURNISHINGELEMENT)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCMEMBER)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCPLATE)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCRAILING)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSITE)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSPACE)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCTRANSPORTELEMENT)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCVIRTUALELEMENT)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCRAMP)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCRAMPFLIGHT)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCROOF)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSLAB)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCSTAIR)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCWALL)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCWALLSTANDARDCASE)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCWINDOW)
                                                      viewer.setState(xState.HIDDEN, xProductType.IFCPROXY)
                                                      
                                                      viewer.setState(xState.UNDEFINED, [pickedId])
                    }">Skrýt vše mimo vybrané</button>
            <button class="small button" onclick="if (viewer) viewer.setState(xState.HIDDEN, [pickedId])">Skrýt vybrané</button>
        </div>

    </div>

    <canvas id="xBIM-viewer"></canvas>
    <script type="text/javascript">
        var models = [];
        var check = xViewer.check();
        var viewer = null;
        var pickedId = null;
        console.log("asdasd");
        if (check.noErrors) {
            viewer = new xViewer("xBIM-viewer");
            viewer.background = [215, 215, 215];

            const params = new Proxy(new URLSearchParams(window.location.search), {
                get: (searchParams, prop) => searchParams.get(prop),
            });

            viewer.load(params.model);
            viewer.start();
            viewer.on("error", function(arg) {
                var container = viewer._canvas.parentNode;
                if (container) {
                    //preppend error report
                    container.innerHTML = "<pre style='color:red;'>" + arg.message + "</pre>" + container.innerHTML;
                }
            });
            viewer.on("pick", function(arg) {
                var id = arg.id;
                viewer.setCameraTarget(id);
                if (viewer.getState(pickedId) == xState.HIGHLIGHTED) viewer.setState(xState.UNDEFINED, [pickedId]);
                pickedId = id;
                viewer.setState(xState.HIGHLIGHTED, [pickedId]);
                var span = document.getElementById("pickedId");
                if (span) {
                    span.innerHTML = id ? id : 'model';
                }
            });
            viewer.on("loaded", function(model) {
                models.push({
                    id: model.id,
                    name: model.tag,
                    stopped: false
                });
                refreshModelsPanel();
            });
            viewer.on("fps", function(fps) {
                var span = document.getElementById("fps");
                if (span) {
                    span.innerHTML = fps;
                }
            });

            $("#input").change(function() {
                if (!input.files) return;

                var file = this.files[0];
                if (!file) return;

                viewer.load(file, file.name);
                viewer.start();
            });

            function refreshModelsPanel() {
                var html = "";
                models.forEach(function(m) {
                    html += "<div> " + m.name + "&nbsp;";
                    html += "<button class='small button' onclick='unload(" + m.id + ")'> Unload </button>";
                    if (m.stopped)
                        html += " <button class='small button' onclick='start(" + m.id + ")'> Start </button> ";
                    else
                        html += " <button class='small button' onclick='stop(" + m.id + ")'> Stop </button> ";
                    html += "</div>";
                });
                $("#models").html(html);
            }

            function unload(id) {
                viewer.unload(id);
                models = models.filter(function(m) {
                    return m.id !== id
                });
                refreshModelsPanel();
            }

            function stop(id) {
                viewer.stop(id);
                var model = models.filter(function(m) {
                    return m.id === id
                }).pop();
                model.stopped = true;
                refreshModelsPanel();
            }

            function start(id) {
                viewer.start(id);
                var model = models.filter(function(m) {
                    return m.id === id
                }).pop();
                model.stopped = false;
                refreshModelsPanel();
            }
        } else {
            var msg = document.getElementById('errLog');
            for (var i in check.errors) {
                var error = check.errors[i];
                msg.innerHTML += "<pre style='color: red;'>" + error + "</pre> <br />";
            }
        }
    </script>
</body>

</html>