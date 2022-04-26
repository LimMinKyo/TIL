# 이미 Github repo에 올라간 파일 .gitignore에 적용이 안되는 경우

```bash
$ git rm --cached .
//현재 디렉토리 기준 스테이징 된 파일을 모두 비움

$ git add .
//현재 디렉토리 기준 .gitignore가 적용된 작업트리를 다시 스테이징 시킴

$ git commit -m ".gitignore 파일 트랙킹하지 않도록 수정"
//커밋 메세지와 함께 새롭게 커밋 함

$ git push
//위의 커밋을 원격 저장소로 push함
```

- 출처: https://sustainable-dev.tistory.com/125