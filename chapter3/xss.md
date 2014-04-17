
####反射xss：
xss代码出现在url中，作为输入提交到服务端，服务端解析后相应，在相应内容中出现这段xss，最后浏览器解析执行。

####存储xss：
提交的xss存储在服务端（数据库/文件/内存），下次请求目标页面时不用在提交xss代码。

####dom xss：
DOM xss不需要服务器解析相应的直接参与，触发xss靠的hi浏览器短的DOM解析。

DOM 输入点：

####常见的输入点：
    document.URL
    document.URLUnencoded
    document.location (and many of its properties)
    document.referrer
    window.location (and many of its properties)
        
####常见的输出点：
    document.write(…)
    document.writeln(…)
    document.body.innerHtml=…
    
####直接修改DOM树：
    document.forms[0].action=… (and various other collections)
    document.attachEvent(…)
    document.create…(…)
    document.execCommand(…)
    document.body. … (accessing the DOM through the body object)
    window.attachEvent(…)

####替换document URL：
    document.location=… (and assigning to location’s href, host and hostname)
    document.location.hostname=…
    document.location.replace(…)
    document.location.assign(…)
    document.URL=…
    window.navigate(…)
    
####打开或修改新窗口：
    document.open(…)
    window.open(…)
    window.location.href=… (and assigning to location’s href, host and hostname)
    
####直接执行脚本：
    eval(…)
    window.execScript(…)
    window.setInterval(…)
    window.setTimeout(…)
