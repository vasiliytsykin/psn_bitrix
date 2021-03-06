<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
</div>
<footer class="footer">
    <div class="wrapper-outer">
        <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "tmp_footer_menu",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "sub",
                "DELAY" => "N",
                "MAX_LEVEL" => "2",
                "MENU_CACHE_GET_VARS" => array(""),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N"
            )
        ); ?>
        <div class="footer__socials" style="visibility: hidden;">
            <div class="footer__social footer__socials--fb">
            </div>
            <div class="footer__social footer__socials--vk">
            </div>
            <div class="footer__social footer__socials--ok">
            </div>
            <div class="footer__social footer__socials--ins">
            </div>
        </div>
        <div class="footer__info">
            <a href="http://www.psngroup.ru" target="_blank" class="footer__copyright">© Девелопер проекта: ГРУППА ПСН
                2017 <span class="dev-logo"></span></a>
            <a href="#" class="footer__pdf" style="visibility: hidden;">Проектная декларация ООО&nbsp;«Феодосийская»&nbsp;[&nbsp;PDF.&nbsp;3&nbsp;мб&nbsp;]</a>
            <a href="#policy-popup" class="footer__policy policy-open">Политика конфиденциальности</a>
            <div class="mfp-hide" id="policy-popup">
                <div class="policy-popup-txt">
                    <h2>Политика конфиденциальности</h2>
                    <p>
                        На этой странице Вы можете ознакомиться с Политикой конфиденциальности Общество с ограниченной
                        ответственностью «Феодосийская», (далее – «мы», «нам», «наш», «нас») в отношении персональной
                        информации, которую мы можем получать посредством сети Интернет во время использования Вами
                        веб-сайта феодосийская.рф (далее – «Сайт») и предоставляемых на Сайте приложений, сервисов,
                        продуктов или услуг (далее – «Сервисы»).
                    </p>
                    <p>
                        Мы с вниманием относимся к Вашей персональной информации. Для обеспечения Вашего доверия мы
                        предприняли меры по защите Вашей частной жизни в отношении операций, совершаемых Вами на Сайте.
                        В Политике конфиденциальности определяется, каким образом происходит сбор, хранение и обработка
                        Вашей персональной информации, которую мы получаем при посещении Вами Сайта. Пожалуйста,
                        внимательно прочтите данную Политику конфиденциальности. Это поможет Вам принять осознанные
                        решения о раскрытии Вашей персональной информации при использовании Сайта.
                    </p>
                    <h2>
                        1. СОГЛАСИЕ С ПОЛИТИКОЙ КОНФИДЕНЦИАЛЬНОСТИ </h2>
                    <p>
                        Ваше обращение к Сайту означает Ваше безоговорочное согласие с данной Политикой
                        конфиденциальности и указанными в ней условиями обработки Вашей персональной информации. В
                        случае несогласия с этими условиями Вы должны воздержаться от использования Сайта.
                    </p>
                    <h2>
                        2. ИНТЕЛЛЕКТУАЛЬНАЯ СОБСТВЕННОСТЬ И ПРАВА НА ИСПОЛЬЗОВАНИЕ </h2>
                    <p>
                        Мы информируем Вас и Вы согласны с тем, что Сайт является нашей интеллектуальной собственностью
                        и управляется нами. Информационное, графическое, аудио, видео, фото или иное наполнение Сайта и
                        размещенные на Сайте материалы являются нашей интеллектуальной собственностью или собственностью
                        правообладателей, которые предоставили нам право размещать указанные материалы на Сайте. Все
                        права на интеллектуальную собственность, в том числе авторские, смежные с ними права,
                        исключительные права на фирменные наименования, коммерческие обозначения, товарные знаки, знаки
                        обслуживания или иные интеллектуальные права во всех материалах или содержании Сайта принадлежат
                        нам или нашим партнерам. Мы предоставляем Вам ограниченную, персональную, непередаваемую, не
                        подлежащую сублицензии, отзывную лицензию на доступ и использование нашего Сайта и его
                        материалов. Сайт и размещенные на нем материалы предназначены исключительного для Вашего
                        некоммерческого использования. Другое использование Сайта или его материалов запрещено без
                        нашего предварительного письменного разрешения. Вы согласны не совершать любого, всех или
                        нескольких из таких действий, как копирование, воспроизведение, передача, распространение,
                        продажа, коммерческое использование, изменение, переработка или создание производных материалов
                        от материалов и содержания Сайта. Совершение данных действий по отношению к Сайту и его
                        материалам является противозаконным и может предусматривать ответственность в соответствии с
                        применимым законодательством. Это ограничение не распространяется на Ваши сообщения и объявления
                        на Сайте.
                    </p>
                    <h2>
                        3. ПРИМЕНИМОЕ ЗАКОНОДАТЕЛЬСТВО </h2>
                    <p>
                        Обращаясь к нашему Сайту, Вы принимаете тот факт, что все вопросы, связанные с посещением и
                        использование Сайта, включая соблюдение данной Политики конфиденциальности, регулируются в
                        соответствии с правом Российской Федерации. При обработке Ваших персональных данных мы
                        руководствуемся положениями Федерального закона от 27 июля 2006 г. № 152-ФЗ «О персональных
                        данных». Более подробную информацию о законодательстве, применимом к Сайту, и Ваших правах можно
                        найти на странице <a href="http://www.rg.ru/">http://www.rg.ru/</a>.
                    </p>
                    <h2>
                        4. ПЕРСОНАЛЬНАЯ ИНФОРМАЦИЯ </h2>
                    <p>
                        Информация, которую мы собираем о Вас, зависит от того, как Вы используете возможности,
                        предоставленные нашим Сайтом. Мы можем получать следующую персональную информацию:
                    </p>
                    <ul type="disc">
                        <li>Персональная информация, соотносимая с Вами как с личностью, включая Ваши персональные
                            данные, такие как Ваше имя, домашний адрес или адрес E-mail, телефон и иная подобная
                            информация, которую Вы предоставляете о себе добровольно, когда регистрируетесь на Сайте или
                            в процессе использования Сервисов, направляете нам письмо или соглашаетесь на получение
                            электронных информационных сообщений с нашего Сайта или при ином взаимодействия с нами.
                            Обязательная для предоставления Сервисов персональная информация помечается специальным
                            образом. Иная информация предоставляется Вами на Ваше усмотрение. Вы не обязаны
                            предоставлять нам Вашу персональную информацию. Тем не менее, если Вы предпочтете отказаться
                            от ее предоставления, то, возможно, Вы сможете посещать не все страницы Сайта и использовать
                            не все Сервисы;
                        </li>
                        <li>Данные, которые автоматически передаются Сайту в процессе его использования с помощью
                            установленного на Вашем устройстве пользователя программного обеспечения, в том числе Ваш
                            IP-адрес, географическое местоположение, информация о браузере или иной программе, с помощью
                            которой Вы осуществляете доступ к Сайту, технические характеристики оборудования и
                            программного обеспечения, используемых Вами в качестве пользователя Сайта, дата и
                            продолжительность посещения Сайта, просматриваемые Вами страницы, адрес веб-сайта, с
                            которого Вы перешли на наш Сайт, данные файлов cookie и иная подобная информация, не
                            позволяющая нам идентифицировать Вашу личность.
                        </li>
                    </ul>
                    <p>
                        Мы не проверяем достоверность предоставленной Вами персональной информации. Однако мы исходим из
                        того, что Вы при использовании нашего Сайта предоставляете достоверную и достаточную информацию
                        и поддерживаете ее в актуальном состоянии. Настоящим Вы гарантируете и заверяете, что в
                        отношении любых персональных данных, которые Вы предоставляете на Сайте, Вы имеете право и
                        уполномочены предоставлять эти персональные данные для целей, указанных в данной Политике
                        конфиденциальности.
                    </p>
                    <h2>
                        5. ЦЕЛИ ОБРАБОТКИ ПЕРСОНАЛЬНОЙ ИНФОРМАЦИИ </h2>
                    <p>
                        Мы собираем и храним только ту персональную информацию, которая необходима для использования
                        нашего Сайта и предоставления Вам Сервисов, а также для реализации любой законной цели,
                        указанной в данной Политике конфиденциальности. Мы обрабатываем собранную персональную
                        информацию в следующих целях:
                    </p>
                    <ul type="disc">
                        <li>Для идентификации, авторизации и аутентификации Вас в качестве пользователя нашего Сайта;
                        </li>
                        <li>Для предоставления Вам персонализированных Сервисов;</li>
                        <li>Для общения с Вами, в том числе направления уведомлений и информации, касающейся
                            использования Сервисов, или об изменениях в наших политиках, а также обработки Ваших
                            запросов и заявок;
                        </li>
                        <li>Для информирования Вас о наших продуктах и услугах или продуктах и услугах наших партнеров
                            или предоставления Вам, с учетом Ваших действий на Сайте, информации, которая, по нашему
                            мнению, будет представлять для Вас особый интерес. Вы также позволите нам учесть Ваши
                            индивидуальные предпочтения и предоставить Вам более высокий уровень обслуживания, в
                            частности, мы можем рассылать Вам приглашения на презентации и другие мероприятия,
                            проводимые нами или нашими партерами, совместно с которыми мы организуем эти мероприятия;
                        </li>
                        <li>Для таргетирования рекламы;</li>
                        <li>Для оценки, оптимизации и улучшения качества Сайта, Сервисов и удобства их использования в
                            соответствии с Вашими предпочтениями;
                        </li>
                        <li>Для проведения статистических и подобных исследований на основе анонимных или обезличенных
                            данных;
                        </li>
                        <li>Для распознавания, исследования и предотвращения действий, которые могут нарушать наши
                            политики или быть незаконными.
                        </li>
                    </ul>
                    <p>
                        Также время от времени мы можем приглашать Вас предоставить персональную информацию в форме
                        опросов или анкет, участие в которых осуществляется исключительно добровольно. Полученная в
                        связи с такими опросами или анкетами персональная информация используется для сообщения Вам
                        результатов опросов или анкетирования, а также для совершенствования использования Сайта или
                        повышения удовлетворенности Сервисами.
                    </p>
                    <h2>
                        6. РЕКЛАМНАЯ ИНФОРМАЦИЯ И МАРКЕТИНГОВЫЕ МАТЕРИАЛЫ. ОТКАЗ ОТ УЧАСТИЯ </h2>
                    <p>
                        В дополнение к обозначенным целям обработки персональной информации мы хотели бы информировать
                        Вас о новостях, рекламных акциях и специальных предложениях, которые могут быть выгодными для
                        Вас. Мы ценим Ваше время и внимание, поэтому контролируем рассылку рекламной информации и
                        маркетинговых электронных писем. Сайт предоставляет Вам возможность отказаться от участия в
                        рассылке таких материалов путем перехода по ссылке, указанной в полученном Вами письме, или
                        выбрав иной доступный способ отказа от рассылки. Вы также можете также изменить Ваши настройки
                        для получения или неполучения маркетинговых электронных писем или обновить их. Обращаем Ваше
                        внимание, что мы не несем ответственности за действия сторонних продавцов и рекламодателей. Мы
                        стремимся работать с надежными компаниями, однако не имеем возможности контролировать их
                        действия. Тем не менее, Вы можете сообщать нам о своем опыте взаимодействия с какими-либо
                        третьими лицами, с которыми мы работаем, чтобы мы имели возможность улучшить свои предложения.
                    </p>
                    <h2>
                        7. УСЛОВИЯ ОБРАБОТКИ ПЕРСОНАЛЬНОЙ ИНФОРМАЦИИ И ЕЕ ПЕРЕДАЧИ ДРУГИМ ЛИЦАМ </h2>
                    <p>
                        Мы сохраняем конфиденциальность Вашей персональной информации, кроме случаев добровольного
                        предоставления Вами информации о себе для общего доступа неограниченному кругу лиц. Пожалуйста,
                        обратите внимание, что Ваша персональная информация, которую Вы самостоятельно размещаете на
                        своей личной странице, в комментариях к публикациям и на иных общедоступных Сервисах, может
                        просматриваться другими пользователями. Мы не будем передавать Ваши персональные данные другим
                        лицам, за исключением ограниченного числа обстоятельств, включая следующие случаи:
                    </p>
                    <ul type="disc">
                        <li>Когда Вы даете нам согласие на совершение таких действий, например, разрешаете нам
                            предоставить Вашу персональную информацию другим веб-сайтам;
                        </li>
                        <li>Когда Ваша персональная информация предоставляется другим лицам, с которыми мы имеем
                            партнерские отношения, в том числе в связи с использованием Вами определенного Сервиса,
                            подрядчикам, услугами которых мы пользуемся для осуществления своей деятельности или работы
                            нашего Сайта, или если передача Вашей персональной информации происходит в рамках продажи,
                            уступки или иной передачи нами бизнеса Сайта полностью или частично. В этом случае мы
                            потребуем от таких лиц обращаться с Вашей персональной информацией в соответствии с данной
                            Политикой конфиденциальности;
                        </li>
                        <li>Когда мы сотрудничаем с финансовыми учреждениями для совместного предложения Вам продуктов и
                            услуг. При этом финансовым учреждениям будет запрещено использовать Вашу персональную
                            информацию иначе, чем для совместного продвижения продуктов и услуг
                        </li>
                        <li>Когда передача персональной информации предусмотрена применимым законодательством в рамках
                            установленной законодательством процедуры либо производится в соответствии с судебным
                            решением;
                        </li>
                        <li>Когда это необходимо для обеспечения возможности защиты наших прав и иных законных
                            интересов, прав и законных интересов других лиц или пользователей, при нарушении наших
                            политик или соглашений;
                        </li>
                        <li>Когда в результате обработки Вашей персональной информации получены обезличенные
                            статистические данные, которые передаются другому лицу для проведения исследования,
                            выполнения работ или оказания услуг по нашему поручению.
                        </li>
                    </ul>
                    <h2>
                        8. ИЗМЕНЕНИЕ И УДАЛЕНИЕ ПЕРСОНАЛЬНОЙ ИНФОРМАЦИИ. ХРАНЕНИЕ ДАННЫХ </h2>
                    <p>
                        В любое время Вы можете изменить (обновить или дополнить) предоставленную нам персональную
                        информацию полностью или частично, воспользовавшись функцией редактирования в соответствующем
                        разделе Сайта либо в персональном разделе Сервиса. Если Вы решите, что не хотите, чтобы Ваша
                        персональная информация, предоставленная нам, использовалась в каких-либо целях, определенных
                        данной Политикой конфиденциальности, Вы можете исключить себя из списка зарегистрированных
                        пользователей Сайта, самостоятельно удалив свой аккаунт или связавшись с нами. Однако удаление
                        Вашего аккаунта может повлечь невозможность посещать некоторые страницы Сайта и использовать
                        некоторые Сервисы. Мы храним Вашу персональную информацию в течение всего периода, на протяжение
                        которого Вы являетесь зарегистрированным пользователем нашего Сайта. В случае удаления Вашего
                        аккаунта мы храним Вашу персональную информацию столько времени, сколько требуется для
                        достижения обозначенных в данной Политике конфиденциальности целей, за исключением случаев,
                        когда применимым законодательством предусмотрено обязательное хранение персональной информации в
                        течение определенного законом срока. Ваше право на изменение или удаление Вашей персональной
                        информации на Сайте может быть ограничено в соответствии с требованиями применимого
                        законодательства. В частности, такие ограничения по указанной причине могут предусматривать нашу
                        обязанность сохранять измененную или удаленную Вами информацию в течение иного срока и
                        передавать такую информацию в соответствии с законодательно установленной процедурой.
                    </p>
                    <h2>
                        9. ОБРАБОТКА ПЕРСОНАЛЬНОЙ ИНФОРМАЦИИ ПРИ ПОМОЩИ ФАЙЛОВ COOKIE И СЧЕТЧИКОВ </h2>
                    <p>
                        Мы используем файлы cookie в качестве основы взаимодействия с Вашим интернет-браузером для
                        автоматического сбора персональной информации. Cookies – это небольшая порция текстовой
                        информации, которую наш Сайт передает Вашему браузеру, а браузер хранит и передает ее обратно
                        Сайту с каждым Вашим запросом на Сайт. Одни значения cookies могут храниться только в течение
                        единовременного сеанса Вашей связи с Сайтом и удаляются после закрытия браузера. Другие,
                        установленные на некоторый период времени, записываются в специальный файл и хранятся на Вашем
                        компьютере. Файлы cookie содержат сведения, позволяющие Сайту идентифицировать Ваш браузер при
                        обращении к Сайту и посещении страниц Сайта. С помощью файлов cookie мы собираем такую
                        информацию, как время, проведенное Вами на Сайте, области посещения Сайта, веб-сайты со ссылками
                        на наш Сайт и из него, иную дополнительную информацию. Структура файла cookie, его содержание и
                        технические параметры определяются Сайтом и могут быть изменены без направления Вам нашего
                        предварительного уведомления. Такие файлы cookie не позволяют нам собирать личную информацию о
                        Вас. Использование файлов cookie является обычной практикой. Мы применяем файлы cookie для
                        запоминания пользователей нашего Сайта и сохранения их персональных предпочтений и настроек, для
                        предоставления им персонализированных Сервисов, для таргетирования рекламы, которая показывается
                        пользователям, в статистических и исследовательских целях, в целях безопасности, а также для
                        усовершенствования Сайта и Сервисов на основе пользовательских предпочтений. Обращаем Ваше
                        внимание, что оборудование и программное обеспечение, используемые пользователями для посещения
                        веб-сайтов в сети Интернет, могут обладать функцией запрещения операций с файлами cookie для
                        любых или для определенных веб-сайтов, а также удаления ранее полученных файлов cookie. В любое
                        время Вы можете самостоятельно удалить сохраненные на Вашем компьютере файлы cookie, изменить
                        параметры в настройках Вашего браузера таким образом, чтобы браузер перестал сохранять все файлы
                        cookie и оповещал их об отправке. Однако в этом случае некоторые функции Сайта и Сервисы могут
                        перестать работать, работать медленнее или отражать только текстовую информацию. Мы оставляем за
                        собой право установить, что предоставление определенного Сервиса возможно лишь при условии, что
                        прием и получение файлов cookie разрешены пользователем. Также на нашем Сайте размещены
                        счетчики, которые используются для анализа файлов cookie пользователей, для сбора и обработки
                        статистической информации о количестве пользователей Сайта, об использовании Сервисов и
                        популярности сервисных настроек, о частоте посещения страниц Сайта, для мониторинга трафика, для
                        оценки технических возможностей Сайта, создания максимально возможного соответствия Сайта
                        используемым пользователями браузерам, а также для обеспечения работоспособности Сайта и
                        Сервисов в целом или их отдельных функций. Технические параметры работы счетчиков определяются
                        Сайтом и могут быть изменены без направления Вам нашего предварительного уведомления.
                    </p>
                    <h2>
                        10. МЕРЫ, ПРИМЕНЯЕМЫЕ ДЛЯ ЗАЩИТЫ ПЕРСОНАЛЬНОЙ ИНФОРМАЦИИ </h2>
                    <p>
                        Мы принимаем организационные и технические меры, которые считаем необходимыми и достаточными для
                        обеспечения защиты Вашей персональной информации от неправомерного или случайного доступа,
                        уничтожения, изменения, блокирования, копирования, распространения, а также от иных
                        неправомерных действий с ней других лиц. Время от времени мы пересматриваем свои процедуры по
                        обеспечению безопасности персональной информации и выбираем подходящие новые технологии и
                        методы. Тем не менее, даже при использовании самых совершенных технологий ни один веб-сайт не
                        является полностью безопасным. В тех маловероятных случаях, когда мы считаем, что безопасность
                        полученной нами персональной информации может быть не соблюдена, мы можем сообщить Вам о таком
                        развитии событий. Если такое уведомление обосновано, мы приложим все усилия для того, чтобы
                        сообщить Вам об этом как можно быстрее с учетом имеющихся обстоятельств.
                    </p>
                    <h2>
                        11. ССЫЛКИ НА ДРУГИЕ САЙТЫ </h2>
                    <p>
                        Настоящая Политика конфиденциальности применима только к настоящему Сайту и не распространяется
                        на какие-либо другие веб-сайты, даже если такие веб-сайты содержат ссылку на наш Сайт или на
                        нашем Сайте есть ссылка на эти веб-сайты. Мы можем указывать ссылки на другие веб-сайты,
                        которые, как мы полагаем, могут представлять интерес для пользователей нашего Сайта. Тем не
                        менее, мы не можем гарантировать высокие стандарты обеспечения конфиденциальности на других
                        веб-сайтах, на которые мы даем ссылки, или нести ответственность за правила конфиденциальности
                        таких веб-сайтов. Пожалуйста, имейте в виду, что эти веб-сайты могут собирать персональную
                        информацию пользователей и что они работают в соответствии со своими собственными правилами
                        конфиденциальности, которые могут отличаться от данной Политики конфиденциальности. Рекомендуем
                        Вам при переходе на другие веб-сайты ознакомиться с действующими на них правилами
                        конфиденциальности, поскольку, как только Вы покидаете наш Сайт, любая предоставленная Вами
                        персональная информация уже не контролируется нами.
                    </p>
                    <h2>
                        12. ВНЕСЕНИЕ ИЗМЕНЕНИЙ В ПОЛИТИКУ КОНФИДЕНЦИАЛЬНОСТИ </h2>
                    <p>
                        Мы сохраняем за собой право время от времени изменять данную Политику конфиденциальности
                        полностью или частично с целью отражения новых технологий, отраслевых практик, нормативных
                        требований, а также для других целей. Мы призываем Вас периодически перечитывать нашу Политику
                        конфиденциальности с тем, чтобы быть информированными относительно того, как мы защищаем Вашу
                        персональную информацию. В случае внесения изменений в Политику конфиденциальности на нашем
                        Сайте будет опубликована обновленная версия Политики конфиденциальности с измененной датой
                        публикации. Это является достаточным уведомлением о внесении изменений в Политику
                        конфиденциальности, и других уведомлений об изменениях мы можем Вам не предоставлять. Однако
                        если речь идет о существенных изменениях, мы уведомим Вас, разместив на Сайте заметное
                        объявление о таких изменениях, либо непосредственно направив Вам уведомление. Изменения в
                        Политике конфиденциальности вступают в силу с момента их размещения на Сайте. Продолжение
                        использования Вами данного Сайта и обращение к нему после публикации изменений в Политике
                        конфиденциальности означает, что Вы тем самым принимаете изменения условий Политики
                        конфиденциальности.
                    </p>
                    <p>
                        <b>Дата публикации: 29.09.2016</b>
                    </p>
                    <p>
                    </p>
                    <p>
                        &nbsp;
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-pattern">
    </div>
<!--    <div class="actions-modal">-->
<!--        <div class="actions-modal__tip">Акции</div>-->
<!--        <div class="actions-modal__content">-->
<!--            --><?// $APPLICATION->IncludeComponent(
//                "bitrix:news.list",
//                "tmp_actions_modal",
//                Array(
//                    "ACTIVE_DATE_FORMAT" => "d.m.y G:i",
//                    "ADD_SECTIONS_CHAIN" => "Y",
//                    "AJAX_MODE" => "N",
//                    "AJAX_OPTION_ADDITIONAL" => "",
//                    "AJAX_OPTION_HISTORY" => "N",
//                    "AJAX_OPTION_JUMP" => "N",
//                    "AJAX_OPTION_STYLE" => "Y",
//                    "CACHE_FILTER" => "N",
//                    "CACHE_GROUPS" => "Y",
//                    "CACHE_TIME" => "36000000",
//                    "CACHE_TYPE" => "A",
//                    "CHECK_DATES" => "Y",
//                    "DETAIL_URL" => "",
//                    "DISPLAY_BOTTOM_PAGER" => "Y",
//                    "DISPLAY_DATE" => "Y",
//                    "DISPLAY_NAME" => "Y",
//                    "DISPLAY_PICTURE" => "Y",
//                    "DISPLAY_PREVIEW_TEXT" => "Y",
//                    "DISPLAY_TOP_PAGER" => "N",
//                    "FIELD_CODE" => array("DATE_ACTIVE_TO", ""),
//                    "FILTER_NAME" => "",
//                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
//                    "IBLOCK_ID" => "8",
//                    "IBLOCK_TYPE" => "-",
//                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
//                    "INCLUDE_SUBSECTIONS" => "Y",
//                    "MESSAGE_404" => "",
//                    "NEWS_COUNT" => "20",
//                    "PAGER_BASE_LINK_ENABLE" => "N",
//                    "PAGER_DESC_NUMBERING" => "N",
//                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
//                    "PAGER_SHOW_ALL" => "N",
//                    "PAGER_SHOW_ALWAYS" => "N",
//                    "PAGER_TEMPLATE" => ".default",
//                    "PAGER_TITLE" => "Новости",
//                    "PARENT_SECTION" => "",
//                    "PARENT_SECTION_CODE" => "",
//                    "PREVIEW_TRUNCATE_LEN" => "",
//                    "PROPERTY_CODE" => array("TOP_LINE", "BOTTOM_LINE", ""),
//                    "SET_BROWSER_TITLE" => "Y",
//                    "SET_LAST_MODIFIED" => "N",
//                    "SET_META_DESCRIPTION" => "Y",
//                    "SET_META_KEYWORDS" => "Y",
//                    "SET_STATUS_404" => "N",
//                    "SET_TITLE" => "Y",
//                    "SHOW_404" => "N",
//                    "SORT_BY1" => "ACTIVE_FROM",
//                    "SORT_BY2" => "SORT",
//                    "SORT_ORDER1" => "DESC",
//                    "SORT_ORDER2" => "ASC"
//                )
//            ); ?>
<!--        </div>-->
<!--        <div class="actions-modal__controls">-->
<!--            <div class="arrows"></div>-->
<!--            <div class="btn-close"></div>-->
<!--        </div>-->
<!--    </div>-->
    <div class="feedback-modal mfp-hide" id="feedback-modal">
        <?
            $utmSource = isset($_COOKIE['utm_source']) ? $_COOKIE['utm_source'] : '';
            $utmCampaign = isset($_COOKIE['utm_campaign']) ? $_COOKIE['utm_campaign'] : '';
            $leadSource = !empty($utmSource) ? $utmSource.(!empty($utmCampaign) ? ', '.$utmCampaign : '') : '';

        ?>
        <input type="hidden" name="lead-source-id" id="utm-source" value="<?=$leadSource?>">
        <input type="hidden" name="web-site-id" id="site-ip" value="<?=gethostbyname($_SERVER['SERVER_NAME'])?>">
        <div class="tab call form-container active">
            <div class="h2">
                Закажите звонок
            </div>
            <div class="h5">
                Мы обязательно вам перезвоним!
            </div>
            <form class="feedback-form">
                <div class="input-group">
                    <input type="text" name="name" id="call-name" required>
                    <label for="call-name">Ваше имя</label>
                </div>
                <div class="input-group">
                    <input type="text" name="phone" id="call-phone" required>
                    <label for="call-phone">Телефон</label>
                </div>
                <div class="notice">
                    Вы можете выбрать удобное время для звонка
                </div>
                <div class="input-group call-time">
                    <div class="calendar">
                        <input type="hidden" name="date" class="feedback-call__date" id="feedback-call__date"> <label
                            for="feedback-call__date" id="feedback-call__label">Сегодня</label>
                    </div>
                    <div class="time">
                        <div class="caption-over">
                            <div class="caption">
                                с <span class="caption__time"><span class="min">9</span>.00</span>
                            </div>
                            <div class="caption">
                                до <span class="caption__time"><span class="max">21</span>.00</span>
                            </div>
                        </div>
                        <input type="text" name="time" id="time" class="range-slider" data-min="9" data-max="21" data-step="1">
                    </div>
                </div>
            </form>
            <a href="#" class="btn-default btn-medium btn-green submit">Перезвоните мне</a>
        </div>
        <div class="tab email form-container">
            <div class="h2">
                Остались вопросы?
            </div>
            <div class="h5">
                Мы обязательно вам ответим!
            </div>
            <form class="feedback-form">
                <div class="input-group">
                    <input type="text" name="name" id="email-name" required>
                    <label for="email-name">Ваше имя</label>
                </div>
                <div class="input-group">
                    <input type="text" name="email" id="email-email" required>
                    <label for="email-email">E-mail</label>
                </div>
                <div class="notice">
                    Напишите сообщение и мы в ближайшее время с вами свяжемся
                </div>
                <textarea name="comments" id="" cols="30" rows="4" required></textarea>
            </form>
            <a href="#" class="btn-default btn-medium btn-green submit">Отправить сообщение</a>
        </div>
        <div class="tab layout form-container">
            <div class="h2">
                Напишите вашу почту
            </div>
            <div class="h5">
                Мы отправим выбранную планировку
            </div>
            <form class="feedback-form">
                <div class="input-group">
                    <input type="text" name="email" id="layout-email" required>
                    <label for="layout-email">E-mail</label>
                </div>
            </form>
            <a href="#" class="btn-default btn-medium btn-green submit">Отправить</a>
        </div>
        <div class="tab booking form-container">
            <div class="h2">
                Заявка на бронь
            </div>
            <form class="feedback-form">
                <div class="input-group">
                    <input type="text" name="name" id="booking-name" required>
                    <label for="booking-name">Ваше имя</label>
                </div>
                <div class="input-group">
                    <input type="text" name="phone" id="booking-phone" required>
                    <label for="booking-phone">Телефон</label>
                </div>
                <div class="input-group">
                    <input type="text" name="article-id" id="booking-id" readonly>
                    <label for="booking-id">Номер брони</label>
                </div>
                <div class="input-group">
                    <input type="checkbox" id="agreement">
                    <div class="label">
                        <label for="agreement">Согласен с</label> <span class="terms open-policy">политикой конфиденциальности</span>
                    </div>
                </div>
            </form>
            <a href="#" class="btn-default btn-medium btn-green submit">Отправить</a>
        </div>
        <div class="tab thanks">
            <div class="h2">Спасибо!</div>
            <div class="h5 call-text">Ваша заявка отправлена, мы свяжемся с&nbsp;Вами в&nbsp;ближайшее время.</div>
            <div class="h5 regular-text">Ваша заявка отправлена.</div>
        </div>
        <div class="tab error">
            <div class="h2">Ошибка!</div>
            <div class="h5">Приносим извинения, но что-то пошло не так.<br>Пожалуйста, попробуйте еще раз.</div>
        </div>
        <div class="loader">
            <div class="loader__content">
                <div class="loader__img"></div>
                <div class="h2">Отправка заявки</div>
                <p>Пожалуйста, подождите</p>
            </div>
        </div>
        <div class="switch">
            <div class="switch__tab call active">
                <span class="switch__tab__txt">Или напишите нам письмо</span>
            </div>
            <div class="switch__tab email">
                <span class="switch__tab__txt">Или закажите обратный звонок</span>
            </div>
        </div>
    </div>
</footer>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-84864886-1', 'auto');
    ga('send', 'pageview');
</script>