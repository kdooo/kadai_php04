<?php
//必ずsession_startは最初に記述
session_start();

//現在のセッションIDを取得
$old_sessionid = session_id();

//新しいセッションIDを発行（前のSESSION IDは無効）「$old_sessionid」を生まれ変わらせる処理
session_regenerate_id(true);

//新しいセッションIDを取得
$new_sessionid = session_id();

//旧セッションIDと新セッションIDを表示 更新すると何度も発行される（盗まれないように新しいのを作る）
echo "古いセッション: $old_sessionid<br />";
echo "新しいセッション: $new_sessionid<br />";
