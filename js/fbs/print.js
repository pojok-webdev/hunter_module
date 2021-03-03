function preparePrint(callback){
    document.getElementsByClassName('navigator').setAttribute('display','none');
    callback(winPrint());
}
function printPageArea(){
    console.log("Print Area Invoked");
    var printContent = document.getElementById('printArea');
    var WinPrint = window.open('', '', 'width=900,height=650');
    WinPrint.document.write(printContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
}
function winPrint(){
    window.print();
}
function printExternal(url,callback) {
    var printWindow = window.open( url, 'Print', 'left=200, top=200, width=950, height=500, toolbar=0, resizable=0');
    printWindow.addEventListener('load', function(){
        printWindow.print();
        printWindow.close();
        callback();
    }, true);
}
printall = function(){
    printExternal('/fbs/hal1/SBY20200722000087002',function(){
        printExternal('/fbs/hal2/SBY20200722000087002',function(){
            console.log('result');
        })
    })
}
function printExternal2(url,callback) {
    var printWindow = window.open( url, 'Print', 'left=200, top=200, width=950, height=500, toolbar=0, resizable=0');
    printWindow.addEventListener('load', function(){
        printWindow.print();
        printWindow.close();
        callback();
    }, true);
}