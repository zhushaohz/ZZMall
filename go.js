setTimeout("go()","6000"); 
function go(){
    window.location.href='./mall';
    
}
function showNotification() {
        window.Notification.permission = "granted";
        if(window.Notification) {
            if(window.Notification.permission == "granted") {
                var notification = new Notification('你有一条新信息', {
                    body: "你好我是王小婷",

                    icon: "img/1.jpg"
                });
                setTimeout(function() { notification.close(); }, 5000);
            } else {
                window.Notification.requestPermission();
            }
        } else alert('你的浏览器不支持此消息提示功能，请使用chrome内核的浏览器！');
    };