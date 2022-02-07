# login_register
German register and login formular 

In connection.php müssen Sie noch Ihre Datenbank eingeben

In der Datenbank erstellt ihr *users* mit 5 Spalten
Darin erstellt ihr ein:

Name		Typ		Wert	Standart	Kollation	Index	A-I

id		BIGINT		20					Primary Ja
user_id		BIGINT		20
user_name	VARCHAR		100			utf8_unicode_ci
password	VARCHAR		100			utf8_unicode_ci
date		TIMESTAMP		CURRENT_TIME
