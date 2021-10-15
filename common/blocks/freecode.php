<html>
<view>
    {{ html_entity_decode( {{freecode}} ) }}
</view>
<edit header="{{_lang.header}}">
    <div>
        <wb-include wb-src="common.inc.php" />
    </div>
    <wb-module wb="module=codemirror&oconv=html_entity_decode" name="freecode"></wb-module>
    <wb-lang>
    [ru]
    header = "Произвольный код в body"
    [en]
    header = "Free code in body"
</wb-lang>
</edit>
</html>