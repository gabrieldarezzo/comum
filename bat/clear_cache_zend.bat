rem Remove todos os arquivos de uma pasta, exceto '.gitignore'
@ECHO off

CD /d C:\xampp\htdocs\sgp-xxx\data\cache

FOR %%i IN (*) DO (
	IF NOT %%i == .gitignore DEL %%i
)