function cart(s){
    console.log(s);
    switch(s)
    {
        case 'sale1':
            var ss = '美区小火箭';
            showNotification(ss);
            break;
        case 'sale2':
            var ss = '美区Quan';
            showNotification(ss);
            break;
        case 'sale3':
            var ss = '美区QuanX';
            showNotification(ss);
            break;
        case 'sale4':
            var ss = '美区礼品卡';
            showNotification(ss);
            break;
    }
    
}
function showNotification(s) {
    window.Notification.permission = "granted";
    if(window.Notification) {
        if(window.Notification.permission == "granted") {
            var notification = new Notification('已成功加入购物车', {
                body: s,

                icon: "商场.png"
            });
            
        } else {
            window.Notification.requestPermission();
        }
    } else alert('你的浏览器不支持此消息提示功能，请使用chrome内核的浏览器！');
};