//adapted from example code 'benskitchen.com'

function cokeScene(){
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function fantaScene(){
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function poweradeScene(){
    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

var spinning = false;

function spin()
{

	document.getElementById('model__RotationTimer' + (nSwitch+1)).setAttribute('enabled', 'true');
	
}

function stopRotation()
{
	document.getElementById('model__RotationTimer' + (nSwitch+1)).setAttribute('enabled', 'false');
}

function animateModel()
{
    if(document.getElementById('model__RotationTimer' + (nSwitch+1)).getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimer' + (nSwitch+1)).setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimer' + (nSwitch+1)).setAttribute('enabled', 'false');
}

function wireFrame()
{
	var e = document.getElementById('wire');
	//e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

function polyFrame()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(false);
	e.runtime.togglePoints(false);
}

var lightOn = true;

function leftLight()
{
	if(document.getElementById('model__leftLight').getAttribute('on')!= 'true')
        document.getElementById('model__leftLight').setAttribute('on', 'true');
    else
        document.getElementById('model__leftLight').setAttribute('on', 'false');


}
function rightLight()
{
	if(document.getElementById('model__rightLight').getAttribute('on')!= 'true')
        document.getElementById('model__rightLight').setAttribute('on', 'true');
    else
        document.getElementById('model__rightLight').setAttribute('on', 'false');
}

function frontLight()
{
	if(document.getElementById('model__frontLight').getAttribute('on')!= 'TRUE')
        document.getElementById('model__frontLight').setAttribute('on', 'TRUE');
    else
        document.getElementById('model__frontLight').setAttribute('on', 'false');
}

function backLight()
{
	if(document.getElementById('model__backLight').getAttribute('on')!= 'true')
        document.getElementById('model__backLight').setAttribute('on', 'true');
    else
        document.getElementById('model__backLight').setAttribute('on', 'false');
}

function offLight()
{
    document.getElementById('model__backLight').setAttribute('on', 'false');
	document.getElementById('model__frontLight').setAttribute('on', 'false');
	document.getElementById('model__leftLight').setAttribute('on', 'false');
	document.getElementById('model__rightLight').setAttribute('on', 'false');
}


function cameraFront()
{
	document.getElementById('model__CameraFront' + (nSwitch+1)).setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__CameraBack' + (nSwitch+1)).setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__CameraLeft' + (nSwitch+1)).setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__CameraRight' + (nSwitch+1)).setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__CameraTop' + (nSwitch+1)).setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__CameraBottom' + (nSwitch+1)).setAttribute('bind', 'true');
}