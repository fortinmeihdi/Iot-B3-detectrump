apiUrl = "http://localhost/Iot-B3-detectrump/api/api.php";
boxId = null;
actualMax = null;
function toggleDisplay(elmt){
    if(typeof elmt == "string")
        elmt = document.getElementById(elmt);
    if(elmt.style.display == "none"){
        elmt.style.display = "";
    }else{
        elmt.style.display = "none";
    }
}
function getData(param) {
    self = this;
    $.post( apiUrl, param, function( data ) {
        data = JSON.parse(data);
	console.log(data);
	if(data['error']!="true"){
        	move = data.move;
        	sound = data.sound;
        	self.displayRow(sound, 'sound');
        	self.displayRow(move, 'move');
	}
    });
}

function refresh() {
    setTimeout(function(){
        this.actualData();
    }, 5000);
}
function actualData(){
    this.getData({"get_data":this.boxId});
    refresh();
}

function displayRow(arr,name){
    max = arr.length;
    l = 0;
    if(this.actualMax == null){
        this.actualMax = arr[max-1][0];
    }else if(arr[max-1][0] > this.actualMax){
        l = this.actualMax;
    }else{
        l = this.actualMax;
        d = this.sortDateTime(new Date());
        data.addRow([{v: [d.hour, d.min, d.second], f: ''+name+''}, 0]);
    }
    for(let x=l;x<max;x++){
        date = new Date(arr[x][1]);
        d = this.sortDateTime(date);
        data.addRow([{v: [d.hour, d.min, d.second], f: ''+name+''}, 1]);
    }
    this.draw();
}
function sortDateTime(date){
    ar = { hour : 0, min : 0, second : 0 };
    ar.hour = date.getHours();
    ar.min = date.getMinutes();
    ar.second = date.getSeconds();
    return ar;
}
function draw(){
    var options = {
        title: 'Trump report',
        hAxis: {
            title: 'Time',
            format: 'h:mm a'
        }
    };
    chart.draw(data, options);
}
function initChart(){
    data = new google.visualization.DataTable();
    chart = new google.visualization.LineChart(document.getElementById('chart_div'));

    data.addColumn('timeofday', 'Time');
    data.addColumn('number', 'x');
    this.draw();
}
