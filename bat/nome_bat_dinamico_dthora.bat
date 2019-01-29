echo %date:~6,4%%date:~3,2%%date:~0,2%_%time:~0,2%%time:~3,2%%time:~6,2%


rem %date:~6,4% = ano 
rem %date:~3,2% = ano 
rem %date:~0,2% = ano 

rem = COMENTARIO

echo %date:~0,2% -- DIA
echo %date:~3,2% -- Mes 
echo %date:~6,4% -- Ano


echo %time:~0,2% -- hh
echo %time:~3,2% -- mm
echo %time:~6,2% -- ss


rem Otimo para salvar saida de script php via Schedule xD
rem como criar um arquivo com nome dinamico -> log_09_12_2016_13.35.18.txt
echo ConteudoDoArquivo > log_%date:~0,2%_%date:~3,2%_%date:~6,4%_%time:~0,2%.%time:~3,2%.%time:~6,2%.txt