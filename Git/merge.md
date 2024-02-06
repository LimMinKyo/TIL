# git branch와 git merge

새로운 브랜치를 만들어, 새로운 기능을 개발하고 완성하였다면, 해당 기능을 main 브랜치(실 서버용 브랜치)에 병합(Merge)하여 새로운 기능을 사용자에게 제공해야 합니다.

그럼 새롭게 개발한 기능을 포함하고 있는 BRANCH_NAME를 main 브랜치에 병합하는 방법에 대해서 알아봅시다. BRANCH_NAME를 main 브랜치에 병합하기 위해서는 우선 main 브랜치로 이동할 필요가 있습니다.

```bash
git checkout main
```

그런 다음, git merg 명령어를 사용하여 main 브랜치에 병합하고자 하는 브랜치를 병합합니다.

```bash
git merge BRANCH_NAME
```
브랜치가 무사히 병합되면 다음과 같은 메시지를 확인할 수 있습니다.

```bash
Merge made by the 'recursive' strategy.
 example.txt | 1 +
 1 file changed, 1 insertion(+)
```

마지막으로, 다음 명령어를 사용하여 병합된 브랜치를 제거합니다.

```bash
git branch -d BRANCH_NAME
```

여기서 사용한 -d 옵션은 병합된 브랜치를 지울 때 사용합니다. 만약, 병합되지 않은 브랜치를 제거하고자 한다면 -D 옵션을 사용해야 합니다.

```bash
git branch -D BRANCH_NAME
```

---

- 출처: https://dev-yakuza.posstree.com/ko/git/branch-merge/