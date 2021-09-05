<div class="divider-text" wb-if='"{{_route.subdomain}}" > ""  AND "{{_sett.modules.yonger.standalone}}" !== "on"'>{{_route.subdomain}}</div>
<hr wb-if='"{{_route.subdomain}}" == "" AND "{{_sett.modules.yonger.standalone}}" !== "on"'>
<ul class="nav nav-aside" wb-if='"{{_route.subdomain}}" > "" OR "{{_sett.modules.yonger.standalone}}" == "on"'>
    <li>
        <div class="mg-y-20">Навигация</div>
    </li>

    <li class="nav-item with-sub">
        <a href="#" data-ajax="{'url':'/cms/ajax/form/pages/list/','html':'.content-body'}" auto class="nav-link">
            <svg class="mi mi-browser-internet-web-network-window-app-icon" wb-module="myicons"></svg>
            <span>Страницы</span>
        </a>
    </li>

    <li class="nav-item with-sub">
        <a href="#" data-ajax="{'url':'/cms/ajax/form/news/list/','html':'.content-body'}" class="nav-link">
            <svg class="mi mi-news-2-paper" wb-module="myicons"></svg>
            <span>Новости</span>
        </a>
    </li>

    <li class="nav-item">
        <a href="#" data-ajax="{'url':'/cms/ajax/form/users/list_users/','html':'.content-body'}" class="nav-link">
            <svg class="mi mi-group-user.1" wb-module="myicons"></svg>
            <span>Пользователи</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" data-ajax="{'url':'/cms/ajax/form/quotes/list/','html':'.content-body'}" class="nav-link">
            <svg class="mi mi-document-contract-edit-pen" wb-module="myicons"></svg>
            <span>Заявки</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" data-ajax="{'url':'/cms/ajax/form/comments/list/','html':'.content-body'}" class="nav-link">
            <svg class="mi mi-users-message-support-1" wb-module="myicons"></svg>
            <span>Коментарии</span>
        </a>
    </li>

    <li class="nav-item">
        <a href="#" data-ajax="{'url':'/module/chat/','html':'.content-body'}" class="nav-link">
            <svg class="mi mi-chat-messages-bubble.14" wb-module="myicons"></svg>
            <span>Сообщения</span>
        </a>
    </li>

    <li>
        <div class="mg-y-20">Система</div>
    </li>

    <li class="nav-item">
        <a href="#" data-ajax="{'url':'/cms/settings/settings_ui','html':'.content-body'}" class="nav-link">
            <svg class="mi mi-settings.2" wb-module="myicons"></svg>
            <span>Настройки</span>
        </a>
    </li>
    <li class="nav-item">
            <a href="#" data-ajax="{'url':'/module/yonger/support','html':'.content-body'}" class="nav-link">
                <svg class="mi mi-protection-06" wb-module="myicons"></svg>
                <span>Поддержка</span>
            </a>
    </li>
</ul>

<div wb-if='"{{_route.subdomain}}" == "" AND  OR "{{_sett.modules.yonger.standalone}}" !== "on"'>
    <ul class="nav nav-aside">
        <li>
            <div class="mg-y-20">Система</div>
        </li>

        <li class="nav-item">
            <a href="#" data-ajax="{'url':'/module/yonger/_settings/','html':'.content-body'}" class="nav-link">
                <svg class="mi mi-setting-edit-filter-gear.1" wb-module="myicons"></svg>
                <span>Настройки</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" data-ajax="{'url':'/module/yonger/support','html':'.content-body'}" class="nav-link">
                <svg class="mi mi-protection-06" wb-module="myicons"></svg>
                <span>Поддержка</span>
            </a>
        </li>
    </ul>


    <div class="card bg-primary text-white text-center p-3">
        <blockquote class="blockquote mb-0">
            <p>Хочешь больше возможностей?</p>
            <div class="blockquote-footer text-white">
            Используй Yonger Pro
            </div>
        </blockquote>
        <a href="#" class="btn btn-secondary mt-3">ПОДКЛЮЧИТЬ</a>
    </div>
</div>