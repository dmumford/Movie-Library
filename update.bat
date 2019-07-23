:: Creates XML file of Movie Names
:: change M: (line 5) to the drive where your movies are located
:: change Movies (line 6) to the folder where your movies are located
cd\
M:
cd Movies
IF EXIST %~dp0Movies.xml DEL /F %~dp0Movies.xml
(for /f "delims=" %%A in ('dir /s/b *.avi *.mp4 *.mkv') do @Echo=%%~nxA)>%~dp0\Movies.xml
