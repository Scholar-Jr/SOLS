function submitConfession(sender, recipient, content) {
    /* 判断输入框中的内容是否完整 */
    if (sender.length === 0 || recipient.length === 0 || content.length === 0) {
        console.log("callback: 提交失败")
        const statueDisplayer = document.getElementById('status-displayer')
        statueDisplayer.style.right = "-255px"
        statueDisplayer.style.display = "block"
        statueDisplayer.style.animation = "bounceInRight 0.3s 0.25s linear forwards"
        statueDisplayer.style.right= "30px"
        statueDisplayer.innerHTML = '<b class="status-title">提交失败</b>'
    } else {
        /* 进行异步数据提交 */
        $.post("./functions/submitConfession.php", {
            sender: sender,
            recipient: recipient,
            content: content
        }, function(data, status) {
            console.log(data)

            if (status === "success") {
                console.log("callback: 提交成功")
                const statueDisplayer = document.getElementById('status-displayer')
                statueDisplayer.style.display = "block"
                statueDisplayer.innerHTML = '<b class="status-title">提交成功</b>'
            } else {
                console.log("callback: 提交失败")
                const statueDisplayer = document.getElementById('status-displayer')
                statueDisplayer.style.display = "block"
                statueDisplayer.innerHTML = '<b class="status-title">提交失败</b>'
            }
        })
    }
}