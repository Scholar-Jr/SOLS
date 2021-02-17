// TODO: 使用自定义html实现alert提示效果

function submitConfession(sender, recipient, content) {
    /* 判断输入框中的内容是否完整 */
    if (sender.length === 0 || recipient.length === 0 || content.length === 0) {
        alert("提交失败")
        clearFields();
    } else {
        /* 进行异步数据提交 */
        $.ajax({
            url: "./functions/submitConfession.php",
            type: "POST",
            data: {
                sender: sender,
                recipient: recipient,
                content: content
            },
            success: function (result) {
                console.log(result)
                alert("提交成功")
                window.location.href = "/"
            },
            error: function (err) {
                console.log(err.statusText);
                alert("提交失败")
                clearFields();
            }
        })
    }
}

function clearFields() {
    document.getElementById('input-sender').value = ""
    document.getElementById('input-recipient').value = ""
    document.getElementById('input-content').value = ""
}