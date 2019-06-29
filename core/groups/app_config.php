<?php

	//application details
		$apps[$x]['name'] = "Group Manager";
		$apps[$x]['uuid'] = "2caf27b0-540a-43d5-bb9b-c9871a1e4f84";
		$apps[$x]['category'] = "Core";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Manage user groups and permissions.";
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "Verwalte Benutzergruppen und Berechtigungen.";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "Verwalte Benutzergruppen und Berechtigungen.";
		$apps[$x]['description']['es-cl'] = "Administrar grupos de usuarios y permisos.";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-fr'] = "Gérer les groupes d'utilisateurs et des autorisations.";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "";
		$apps[$x]['description']['nl-nl'] = "";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "Gerenciar grupos de usuários e permissões.";
		$apps[$x]['description']['pt-pt'] = "Gerenciar grupos de usuários e permissões.";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "Управление группами пользователей и уровнями доступа";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";
		$apps[$x]['description']['vi'] = "Quản lý nhóm người dùng và quyền.";

	//permission details
		$y=0;
		$apps[$x]['permissions'][$y]['name'] = "group_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "3b4acc6d-827b-f537-bf21-0093d94ffec7";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "group_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "group_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "group_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "group_domain";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "group_all";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "group_member_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "3b4acc6d-827b-f537-bf21-0093d94ffec7";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "group_member_add";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "group_member_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "group_permissions";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "group_user_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "3b4acc6d-827b-f537-bf21-0093d94ffec7";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "group_user_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "group_user_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "group_user_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "group_permission_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "3b4acc6d-827b-f537-bf21-0093d94ffec7";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "group_permission_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "group_permission_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "group_permission_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";

	//schema details
		$y=0;
		$apps[$x]['db'][$y]['table']['name'] = "v_groups";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "group_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "id";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "serial";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "integer";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "INT NOT NULL AUTO_INCREMENT";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['deprecated'] = "true";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "v_id";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['deprecated'] = "true";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "group_name";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "groupid";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "group_protected";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "group_description";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "groupdesc";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_group_users";
		$apps[$x]['db'][$y]['table']['parent'] = "v_groups";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "id";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "serial";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "integer";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "INT NOT NULL AUTO_INCREMENT";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['deprecated'] = "true";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "group_user_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "v_id";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['deprecated'] = "true";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "group_name";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "groupid";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "group_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_groups";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "group_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "username";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['deprecated'] = "true";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "user_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_group_permissions";
		$apps[$x]['db'][$y]['table']['parent'] = "v_groups";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "group_permission_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "id";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "group_permission_name";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "serial";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "integer";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "INT NOT NULL AUTO_INCREMENT";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['deprecated'] = "true";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "v_id";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['deprecated'] = "true";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "permission_name";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "permission_id";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "group_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "group_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";

?>