---
title: observerパターン
---

* observerパターンはオブジェクト間の1:N関係を定義する
* SubjectもObserverもそれぞれのインターフェースを使用する
* Subjectは関連しているオブザーバーについて、observerインターフェースを実装している以外は知りえない疎結合な関係
* SubjectからObserverへと情報を伝えるのは、push型とpull型があるが、observerが任意のタイミングで情報を取得できるpull型の方がいいかも
* Observerパターンはコンポジション（移譲・合成）により、Subjectとobjectの任意の数の関係を構成する