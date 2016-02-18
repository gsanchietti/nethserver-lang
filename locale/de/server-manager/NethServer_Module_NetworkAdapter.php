<?php 

/* NethServer_Module_NetworkAdapter translation, language: en */

$L['bootproto_dhcp_label'] = 'DHCP';
$L['bootproto_label'] = 'IP Zuweisung';
$L['bootproto_none_label'] = 'statische';
$L['blue_label'] = 'Gäste (blau)';
$L['device_label'] = 'Gerät';
$L['gateway_label'] = 'Gateway';
$L['green_label'] = 'LAN (grün)';
$L['hwaddr_label'] = 'MAC Adresse';
$L['ipaddr_label'] = 'IP Adresse';
$L['orange_label'] = 'DMZ (orange)';
$L['Key_label'] = 'Gerät';
$L['netmask_label'] = 'Netmask';
$L['NetworkAdapter_Description'] = 'Netzwerkeinstellungen ändern';
$L['NetworkAdapter_Tags'] = 'Netzwerkadapter Ethernet';
$L['NetworkAdapter_Title'] = 'Netzwerk';
$L['red_label'] = 'Internet (rot)';
$L['role_label'] = 'Rolle';
$L['update_header_label'] = 'Gerät aktualisieren';
$L['interface-config_label'] = 'Schnittstelle einrichten';
$L['valid_platform,interface-config,interface-role,3'] = "DHCP kann nur mit roten Schnittstellen genutzt werden";
$L['valid_platform,interface-config,interface-role,4'] = "Kann die letzte grüne Schnittstelle nicht löschen";
$L['No'] = 'Nein';
$L['Yes'] = 'Ja';
$L['type_alias_label'] = 'alias';
$L['type_bridge_label'] = 'Brücke';
$L['type_bond_label'] = 'Bond (gebündelt)';
$L['type_vlan_label'] = 'VLAN';
$L['SetIpAddress_header'] = 'IP Zuweisung Konfigurieren - ${0}';
$L['CreateLogicalInterface_label'] = 'neue Schnittstelle';
$L['CreateLogicalInterface_header'] = 'neues logische Schnittstelle';
$L['vlanTag_label'] = 'Tag';
$L['vlan_label'] = 'Schnittstelle';
$L['InterfaceType_label'] = 'Typ';
$L['Next_label'] = 'weiter';
$L['Back_label'] = 'zurück';
$L['Edit_label'] = 'verändern';
$L['Edit_header'] = 'ändern ${dev} - ${bus} ${model}';
$L['Edit_description'] = "Link status is \${link}\nSpeed \${speed} Mbit/s\nDriver \${driver}\nMac address \${mac}";
$L['Link_status_up'] = 'auf';
$L['Link_status_down'] = 'runter';
$L['Link_status_na'] = 'N/A';
$L['speed_label'] = 'Geschwindigkeit';
$L['Confirm_header'] = 'Create ${role} interface ${device}';
$L['Action_create_bridge'] = 'Create a new bridge interface ${device} with ${parts}';
$L['Action_create_bond'] = 'erstelle neue virtuelles Netzwerksgerät ${device} mit ${parts}';
$L['Action_create_vlan'] = 'Erstelle ein neues VLAN Netzwerk ${device} auf ${parts}';
$L['Action_create_role'] = 'Set role to "${role}"';
$L['Action_set_static_ip'] = 'Set static IP ${ipaddr}/${netmask}';
$L['Action_use_dhcp'] = 'IP Zuweisung erfolgt durch DHCP-Server
(Obtain IP configuration from DHCP server)';
$L['Action_use_gateway'] = 'Gateway ${gateway} benutzen';
$L['Action_use_no_gateway'] = 'Kein Gateway setzen';
$L['Create_label'] = 'Interface erstellen';
$L['bridged_label'] = 'Bridged';
$L['slave_label'] = 'Slave';
$L['CreateIpAlias_header'] = 'erstelle IP alias "${0}"';
$L['ReleasePhysicalInterface_header'] = 'Version ${0}';
$L['ReleasePhysicalInterface_roled_message'] = 'Release role ${role} assigned to physical interface ${device}?';
$L['ReleasePhysicalInterface_slave_message'] = 'entferne ${device} von virtuellen Netzwerkgerät ${parent}?';
$L['ReleasePhysicalInterface_bridged_message'] = 'Entferne ${device} von bridge ${parent}?';
$L['DeleteLogicalInterface_label'] = 'löschen';
$L['DeleteLogicalInterface_header'] = 'Bestätige Löschen von ${0}';
$L['DeleteLogicalInterface_bond_message'] = "lösche das virtuelle \${device}.\n Wählen Sie einen einzelene Schnittstelle aus, und weisen Sie dieser die aktuellen Rolle und die IP-Einstellungen zu.";
$L['DeleteLogicalInterface_bridge_message'] = "Deleting bridge interface \${device}.\nPick a successor from the bridged interfaces to give it the current role and IP settings.";
$L['DeleteLogicalInterface_vlan_message'] = "Bestätige das Löschen von VLAN \${device}.";
$L['DeleteLogicalInterface_alias_message'] = "Bestätige das Löschen von alias \${device}.";
$L['ReleasePhysicalInterface_label'] = 'Funktion freigeben';
$L['Release_label'] = 'Funktion freigeben';
$L['CleanPhysicalInterface_label'] = 'löschen';
$L['CreateIpAlias_label'] = 'Erstelle IP alias';
$L['successor_label'] = 'Nachfolger';
$L['NoSuccessor_label'] = 'Nein';
$L['bond_label'] = 'Bond (Netzwerkkarten bündeln)';
$L['bridge_label'] = 'Bridge';
$L['alias_label'] = 'alias';
$L['hotspot_label'] = 'Hotspot';
$L['RenameInterface_header'] = 'Funktionen an physikalische Schnittstellen verteilen';
$L['[leave untouched]'] = '-';
$L['cards_label'] = 'Physikalische Schnittstellen';
$L['CleanPhysicalInterface_header'] = 'Entfernen ${0}';
$L['Confirm device ${0} removal'] = 'Remove ${0} device from the database?';
$L['Clean_label'] = 'Entfernen';
$L['Refresh_label'] = 'Refresh link state';
$L['roleis_label'] = 'Rolle';
$L['MAC: ${0}'] = 'MAC ${0}';
$L['Model: ${0}'] = 'Model ${0}';
$L['All roles are correctly assigned to network cards.'] = 'Alle Rollen wurden den Netzwerkkarten richtig zugewiesen.';
$L['type_xdsl_label'] = 'PPPoE on ppp0 ';
$L['xdsl_label'] = 'PPPoE ';
$L['PppoeUser_label'] = 'Benutzername';
$L['PppoePassword_label'] = 'Passwort';
$L['PppoeInterface_label'] = 'Ethernet Schnittstelle';
$L['PppoeProvider_label'] = 'Provider';
$L['pppoe_label'] = 'PPPoE (red) ';
$L['SetPppoeParameters_label'] = 'PPPoE konfigurieren';
$L['SetPppoeParameters_header'] = 'PPPoE ppp0 konfigurieren';
$L['ReleasePhysicalInterface_pppoe_message'] = "Release PPPoE red role from \${device}?\nThe associated ppp0 device will be also removed.";
$L['DeleteLogicalInterface_xdsl_message'] = "Remove the logical PPPoE device ppp0?";
$L['valid_pppoe_already_configured'] = 'The PPPoE device ppp0 is already configured';
$L['valid_pppoe_red_role_only'] = 'The PPPoE device ppp0 must be assigned the red role';
$L['PppoeAuthType_label'] = 'Authentifizierungstyp';
$L['AuthType_auto'] = 'automatisch';
$L['AuthType_pap'] = 'PAP';
$L['AuthType_chap'] = 'CHAP';