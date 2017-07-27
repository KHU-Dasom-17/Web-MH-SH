< DB Table >
schema : db1
table : table1
coloumn -> id, pw, name, stunum, phonum, email, isAdmin, isAccept

========================
< Directory >

api/  :: user에게 제공되지 않고 내부적으로만 기능하는 php 파일들.

db/  :: db관련.

frame/  ::  UI 관련.

page/  :: user에게 제공되는 페이지.

res/  :: 이미지, 소리 등 리소스.

========================
< 네이밍 규칙 >

두 단어 연결 시 언더바(_) 사용.
bool 타입 느낌일 경우는 'is대문자' 형식( ex. isAdmin)
