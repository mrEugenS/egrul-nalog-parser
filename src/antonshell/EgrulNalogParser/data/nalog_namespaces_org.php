<?php

use antonshell\EgrulNalogParser\classes\DocumentNamespace;

return [
    new DocumentNamespace(
        'common',
        'Наименование____'
    ),
	new DocumentNamespace(
        'address',
        'Место нахождения и адрес юридического лица'
    ),
	new DocumentNamespace(
        'mail',
        'Адрес электронной почты'
    ),
    new DocumentNamespace(
        'registration_info',
        'Сведения о регистрации'
    ),
	new DocumentNamespace(
        'registration_info_pension_insurance',
        'Сведения о регистрации в качестве страхователя по обязательному пенсионному'
    ),
	
	new DocumentNamespace(
        'registration_info_social_insurance',
        'Сведения о регистрации в качестве страхователя по обязательному социальному'
    ),
	new DocumentNamespace(
        'termination_information',
        'Сведения о прекращении юридического лица'
    ),
	
	
    new DocumentNamespace(
        'register_taxes',
        'Сведения о регистрирующем органе по месту нахождения юридического лица'
    ),
    new DocumentNamespace(
        'register_status',
        'Сведения о состоянии юридического лица'
    ),
    new DocumentNamespace(
        'taxes',
        'Сведения об учете в налоговом органе'
    ),
    new DocumentNamespace(
        'pension',
        'Сведения о регистрации в качестве страхователя в территориальном органе'
    ),
    new DocumentNamespace(
        'social_insurance',
        'Сведения о регистрации в качестве страхователя в исполнительном органе Фонда'
    ),
    new DocumentNamespace(
        'start_capital',
        'Сведения об уставном капитале (складочном капитале, уставном фонде, паевых взносах'
    ),
    new DocumentNamespace(
        'stop_org',
        'Сведения о прекращении'
    ),
    new DocumentNamespace(
        'confidant',
        'Сведения о лице, имеющем право без доверенности действовать от имени юридического'
    ),
    new DocumentNamespace(
        'information_capital',
        'Сведения об уставном капитале / складочном капитале / уставном фонде / паевом фонде'
    ),
    /*new DocumentNamespace(
        'founders',
        'Сведения об учредителях (участниках'
    ),*/
    new DocumentNamespace(
        'founders',
        'Сведения об участниках / учредителях юридического лица',
        true
    ),
    new DocumentNamespace(
        'main_activity',
        'Сведения об основном виде деятельности'
    ),
    new DocumentNamespace(
        'extra_activity',
        'Сведения о дополнительных видах деятельности',
        true
    ),
	new DocumentNamespace(
        'assignee_details',
        'Сведения о правопреемнике'
    ),

/*
	new DocumentNamespace(
        'aaa',
        'Сведения о свидетельстве, подтверждающем факт внесения записи в ЕГРЮЛ',
		true
    ),
	new DocumentNamespace(
        'bbb',
        'Серия, номер и дача выдачи свидетельства'
    ),
*/
	
    new DocumentNamespace(
        'egrul',
        'Сведения о записях, внесенных в Единый государственный реестр юридических лиц',
        true,
        true
    ),
    new DocumentNamespace(
        'extra_activity',
        'Сведения о держателе реестра акционеров акционерного общества',
        false
    ),
    new DocumentNamespace(
        'representative_offices',
        'Представительства',
        true
    ),
    new DocumentNamespace(
        'license_info',
        'Сведения о лицензиях',
        true
    ),
    new DocumentNamespace(
        'branch_offices',
        'Филиалы',
        true
    ),
];
