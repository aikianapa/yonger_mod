<html>
<view head>
    {{ html_entity_decode( {{code}} ) }}
</view>
<edit header="{{_lang.header}}">
    <div>
        <wb-include wb-src="common.inc.php" />
    </div>
    <wb-module wb="module=codemirror&oconv=html_entity_decode" name="code"></wb-module>
    <wb-lang>
    [ru]
    header = "Вставка кода в head"
    [en]
    header = "Insert code in head"
</wb-lang>
</edit>
</html>