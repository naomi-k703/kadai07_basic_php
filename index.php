<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自己分析</title>

    <!-- CSSファイルのリンク -->
    <link rel="stylesheet" href="styles.css">
    <!-- Chart.js CDNのリンク -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- jQueryのCDNリンク -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

    <form action="write.php" method="post">
         <!-- 左右に分かれた情報セクション -->
        <div class="container">
            <!-- 左側のセクション -->
            <div class="left-section">

                
                <!-- 1. 所属情報（基本情報）セクション -->
                <div class="section affiliation-info">
                    <h2>1. 所属情報（基本情報）</h2>
                    <div class="underline"></div>

                    <!-- 社員番号と連絡先 -->
                    <div class="form-row">
                        <div class="form-group">
                            <label>社員番号:</label>
                            <input type="text" name="employee-number"><br>
                        </div>
                        <div class="form-group">
                            部署:<input type="text" name="department" placeholder="部署名を入力" required><br>
                        </div>
                    </div>
                    <!-- 名前と性別 -->
                    <div class="form-row">
                        <div class="form-group">
                            役職:<input type="text" name="position" placeholder="役職を入力（例：スタッフ、マネージャー、リーダーなど）" required><br>
                        </div>
                        <div class="form-group">
                            名前（フルネーム）:<input type="text" name="name"><br>
                        </div>    
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            性別:<select name="gender" required>
                                <option value="">選択してください</option>
                                <option value="男性">男性</option>
                                <option value="女性">女性</option>
                                <option value="その他">その他</option>
                                </select>
                        </div>
                        <div class="form-group">
                            連絡先（会社のメールアドレス）:<input type="text" name="contact"><br>
                        </div>
                    </div>
                    備考：<textarea name="memo" cols="30" rows="10"></textarea>
                </div>

                <!-- 2. 現在の業務内容セクション -->
                <div class="section current-work">
                    <h2>2. 現在の業務内容</h2>
                    <div class="underline"></div>
                    <form>
                        <div class="form-group">
                            担当業務の詳細:<textarea name="tasks" cols="20" rows="10" placeholder="主な業務やプロジェクトを教えてください" required></textarea>
                            担当業務役割:<textarea type="text" cols="20" rows="10" name="role" placeholder="リーダー的な立場、サポート的な立場などを入力" required></textarea>
                        </div>
                    </form>
                </div>
                <!-- 3. 過去の経験・キャリアセクション -->
                <div class="section experience">
                    <h2>3. 過去の経験・キャリア</h2>
                    <div class="underline"></div>
                    <form>
                        <div class="form-group">
                            過去の経験やキャリア:<textarea name="past-experience" cols="20" rows="10" placeholder="学生時代のバイトやインターンの経験や過去のお仕事などを教えてください" required></textarea>
                            <div class="form-group">
                                楽しかったこと・やりがいを感じたこと:<textarea cols="20" rows="10" name="enjoyable-experience" placeholder="特に楽しかったことややりがいを感じたこと、その理由や状況も合わせて教えてください" required></textarea>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="form-group">
                    <label>モチベーションの源泉（最大3つ選択）:</label>
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="motivation" value="達成感"> 達成感</label>
                        <label><input type="checkbox" name="motivation" value="チームワーク"> チームワーク</label>
                        <label><input type="checkbox" name="motivation" value="スキルアップ"> スキルアップ</label>
                        <label><input type="checkbox" name="motivation" value="社会貢献"> 社会貢献</label>
                        <label><input type="checkbox" name="motivation" value="報酬"> 報酬</label>
                        <label><input type="checkbox" name="motivation" value="その他"> その他（テキスト入力）</label>
                        <input type="text" id="motivation-other" placeholder="その他のモチベーションを入力">
                    </div>
                </div>

                <!-- 4. 現在の業務と目標セクション -->
                <div class="section current-goals">
                    <h2>4. 現在の業務と目標</h2>
                    <div class="underline"></div>
                    <form>
                        <div class="form-group">

                            入社の動機や当時の目標:<textarea name="entry-motivation" cols="20" rows="10" placeholder="入社の動機や当時の目標を教えてください" required></textarea>
                            現時点での実現したいことや目標:<textarea name="future-positions" cols="20" rows="10" placeholder="何かオーナーシップを取って力を発揮したい、サポート的な役割で力を発揮したい、こんな役割を実践してみたいなど" required></textarea>

                            <div class="form-group">
                                目標達成に向けて、強化したいスキルや取り組みたいこと:<textarea name="future-skills" cols="20" rows="10" placeholder="今後取り組みたいことや計画を教えてください" required></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                    <!-- 右側のセクション -->
                    <div class="right-section">
                        <!-- 6. 強みと価値観や成長のポイントセクション -->
                        <div class="section strengths-growth">
                            <h2>6. 強みと価値観</h2>
                            <div class="underline"></div>
                            <!-- アンダーラインを追加 -->
                            <img
                                src="image/スクリーンショット 2024-09-13 22.17.20.png"
                                alt="強みの画像"
                                width="650" />
                            <form>
                                <div class="form-group">
                                    あなたの強み:
                                    <textarea name="strengths" cols="20" rows="10" placeholder="自分で感じている強みや、周りから言われる強みを教えてください" required></textarea>
                                    <!-- PDF生成ボタン -->
                                    <button onclick="generatePDFWithPdfMake()">
                                        強みのキーワードPDFをダウンロード
                                    </button>
                                </div>
                                <div class="form-group">
                                    成長させたい分野や伸ばしたいポイント:<textarea name="growth-points" cols="20" rows="10" placeholder="成長させたい分野や伸ばしたいポイントを教えてください" required></textarea>
                                </div>
                                <div class="form-group">
                                    あなたの大事にしている価値観:<textarea name="values" cols="20" rows="10" placeholder="例：家族、挑戦、健康、多様性など" required></textarea>
                                    <img
                                        src="image/価値観:2024-09-15 22.24.36.png"
                                        alt="価値観の画像"
                                        width="650" />
                                </div>
                            </form>
                        </div>
                        <!-- 7. サポートの必要性セクション -->
                        <div class="section support-needs">
                            <h2>7. サポートの必要性</h2>
                            <div class="underline"></div>
                            <form>
                                <div class="form-group">
                                    現在の課題:<textarea name="current-challenges" cols="20" rows="10" placeholder="今の業務で困っていることや悩みがあれば教えてください" required></textarea>
                                </div>
                                <div class="form-group">
                                    欲しいサポート:<textarea name="desired-support" cols="20" rows="10" placeholder="チームや上司にどのようなサポートをしてほしいか教えてください" required></textarea>
                                </div>
                            </form>
                        </div>
                        <!-- 8. 共有事項セクション -->
                        <div class="section additional-info">
                            <h2>8. 共有事項</h2>
                            <div class="underline"></div>
                            <form>
                                <div class="form-group">
                                    伝え足りないこと・追加で話したいこと:<textarea name="additional-comments" cols="20" rows="10" placeholder="何か伝え足りないことや、追加で話したいことがあれば教えてください" required></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- 入力完了時にアラートを出すボタン -->
                <button onclick="showCompleteAlert()">入力完了</button>

                <button type="pre_submit">一時保存</button>
                <button type="submit">送信</button>
                <p><a href="read.php">データを見る</a></p>
                <!-- CSVエクスポートボタン -->
                <button id="exportButton" onclick="exportToCSV()">CSVエクスポート</button>

                <!-- ローディングスピナー -->
                <div id="loadingSpinner" style="display: none">Loading...</div>
    </form>

    <footer>
        <p>
            &copy; 2024 自己価値分析サイト by Givin' Back Inc. All rights reserved.
        </p>
    </footer>

    <!-- スクリプト -->
    <script>
        function showCompleteAlert() {
            alert("入力が完了しました！");
        }

        function exportToCSV() {
            document.getElementById("loadingSpinner").style.display = "block";

            // フォームの入力値を取得
            const name = document.getElementById("name").value;
            const gender = document.getElementById("gender").value;
            const position = document.getElementById("position").value;
            const department = document.getElementById("department").value;
            const contact = document.getElementById("contact").value;
            const tasks = document.getElementById("tasks").value;
            const role = document.getElementById("role").value;
            const pastExperience = document.getElementById("past-experience").value;
            const enjoyableExperience = document.getElementById(
                "enjoyable-experience"
            ).value;
            const entryMotivation =
                document.getElementById("entry-motivation").value;
            const futureSkills = document.getElementById("future-skills").value;
            const strengths = document.getElementById("strengths").value;
            const growthPoints = document.getElementById("growth-points").value;

            // モチベーションの源泉（チェックボックス）の値を取得
            const motivationElements = document.getElementsByName("motivation");
            let motivations = [];
            for (let i = 0; i < motivationElements.length; i++) {
                if (motivationElements[i].checked) {
                    motivations.push(motivationElements[i].value);
                }
            }
            const motivationOther =
                document.getElementById("motivation-other").value;
            if (motivationOther) {
                motivations.push(motivationOther);
            }

            const values = document.getElementById("values").value;
            const currentChallenges =
                document.getElementById("current-challenges").value;
            const desiredSupport = document.getElementById("desired-support").value;
            const futurePositions =
                document.getElementById("future-positions").value;
            const additionalComments = document.getElementById(
                "additional-comments"
            ).value;

            // CSVデータの作成
            let csvContent = "data:text/csv;charset=utf-8,";
            csvContent +=
                "名前,性別,役職,部署,連絡先,担当業務の詳細,役割,過去の経験やキャリア,楽しかったこと・やりがい,入社の動機や当時の目標,今後強化したいスキル,あなたの強み,成長させたい分野,モチベーションの源泉,大事にしている価値観,現在の課題,欲しいサポート,今後希望する役割,追加で話したいこと\n";
            csvContent += `"${name}","${gender}","${position}","${department}","${contact}","${tasks}","${role}","${pastExperience}","${enjoyableExperience}","${entryMotivation}","${futureSkills}","${strengths}","${growthPoints}","${motivations.join(
          " / "
        )}","${values}","${currentChallenges}","${desiredSupport}","${futurePositions}","${additionalComments}"\n`;

            // CSVファイルのダウンロード
            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "user_data.csv");
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);

            document.getElementById("loadingSpinner").style.display = "none";
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.js"></script>
    <script src="index.js"></script>

</body>

</html>