<?php
include_once "Layouts/Customer/header.php"
?>
   <style>

    /* Reset default styles */


/* Main container for news articles */
.news-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

/* News article styles */
.news-article {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px;
}

/* News article title styles */
.news-article h2 {
    color: #4CAF50;
    font-size: 24px;
}

/* News article content styles */
.news-article p {
    font-size: 16px;
    margin-bottom: 10px;
}

/* News article category styles */
.news-article p.category {
    color: #4CAF50;
    font-weight: bold;
}

/* News article image styles */
.news-article img {
    max-width: 100%;
    height: auto;
    margin-top: 10px;
}

/* Footer styles */

/* Style for the article-container */
.article-container {
    border: 1px solid #ccc;
    padding: 20px;
    margin-bottom: 20px;
    background-color: #f9f9f9;
}

/* Style for comments */
.comment-box {
    border: 1px solid #ddd;
    padding: 10px;
    margin: 10px 0;
    background-color: #fff;
}

.comment-text {
    font-size: 16px;
    margin-bottom: 5px;
}

.comment-rating {
    font-size: 14px;
    color: #888;
    margin-bottom: 5px;
}

.comment-date {
    font-size: 12px;
    color: #777;
}

/* Style for comment input and rating input */
.comment-input, .rating-input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

/* Style for the submit button */
.submit-button {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.submit-button:hover {
    background-color: #45a049;
}


/* Responsive styles for smaller screens */
@media screen and (max-width: 768px) {
    /* Adjust styles as needed for smaller screens */
    .news-container {
        padding: 10px;
    }
    
    .news-article {
        padding: 15px;
    }
    
    .news-article h2 {
        font-size: 20px;
    }
    
    .news-article p {
        font-size: 14px;
    }
    
    .news-article img {
        margin-top: 8px;
    }
}

   </style>

<div class="page-banner overlay-dark bg-image" style="background-image: url(layouts/Customer/assets/img/homebg.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">HealthoraLatestNews</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Healthora Latest News</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
  
    <main>
    <form action="latestnews.php" method="GET">
    <label for="category">Select a Category:</label>
    <select name="category" id="category">
        <option value="0">Filter Category</option>
        <option value="1">Fitness News</option>
        <option value="2">Nutrition News</option>
        <option value="3">Mental Health News</option>
        <option value="4">Medical Breakthroughs News</option>
       
    </select>
    <input type="submit" value="Filter">
</form>

        <section class="news-container">
            <?php
            
            $catId = 0;
            if (isset($_GET["category"])) {
                $catId = $_GET["category"];
            }

            // Fetch news articles from the database
            $pdo = new PDO("mysql:host=localhost;dbname=healthera_db", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "";

            if ($catId > 0) {
                $sql = "SELECT articles.*, categories.name AS category_name FROM articles
                        INNER JOIN categories ON articles.category_id = categories.id
                        WHERE articles.category_id = " .
                        $catId . " ORDER BY date_published DESC";
                # code...
            }
            else {
                $sql = "SELECT articles.*, categories.name AS category_name FROM articles
                        INNER JOIN categories ON articles.category_id = categories.id
                        ORDER BY date_published DESC";
            }


            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($articles as $article) {
                echo "<article class='news-article'>";
                echo "<p>Category: {$article['category_name']}</p>";
                echo "<h2>{$article['title']}</h2>";
                echo "<img src='{$article['image_url']}' alt='Article Image'>";
                echo "<p>{$article['content']}</p>";
                
                
              
                
                
                // Add comment and rating form here


while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // Display article content

    // Display comments and ratings
    echo "<div class='article-container'>";
    echo "<h3>Comments:</h3>";

    // Fetch and display comments and ratings for the current article
    $article_id = $row['article_id'];
    $commentsQuery = "SELECT * FROM article_comments WHERE article_id = ?";
    $commentsStmt = $pdo->prepare($commentsQuery);
    $commentsStmt->execute([$article_id]);

    while ($commentRow = $commentsStmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='comment-box'>";
        echo "<p class='comment-text'>{$commentRow['comment']}</p>";
        echo "<p class='comment-rating'>Rating: {$commentRow['rating']}</p>";
        echo "<p class='comment-date'>Posted on: {$commentRow['date_posted']}</p>";
        echo "</div>";
    }

    // Add a form for users to submit comments and ratings
    echo "<h4>Add a Comment and Rating:</h4>";
    echo "<form action='post_comment.php' method='POST'>";
    echo "<input type='hidden' name='article_id' value='$article_id'>";
    echo "<textarea name='comment' class='comment-input' placeholder='Write your comment...' required></textarea>";
    echo "<input type='number' name='rating' class='rating-input' placeholder='Rating (1-5)' min='1' max='5' required>";
    echo "<input type='submit' class='submit-button' value='Submit'>";
    echo "</form>";
    echo "</div>"; // Close the article-container div
}

                
                echo "</article>";
            }

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["category"])) {
    // Sanitize and validate the selected category (prevent SQL injection)
    $category_id = intval($_GET["category"]);

    // Prepare and execute a SQL query to fetch articles based on the selected category
    $query = "SELECT * FROM articles WHERE category_id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$category_id]);

    // Fetch and display the filtered articles
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<h2>{$row['title']}</h2>";
        echo "<p>{$row['content']}</p>";
        echo "<p>Published on: {$row['date_published']}</p>";
        // Add more HTML/CSS for formatting as needed
    }
}
            ?>
            
            <div class="comment-form">
    <h4>Add a Comment and Rating:</h4>
    <form method="POST">

    <?php

include_once "DatabaseConfigurations/DbFucntions.php";


$comment_text = $rating = "";
$comment_textError = $ratingError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $comment_text = $_POST["comment_text"];
  $rating = $_POST["rating"];
 

  $comment_textError = empty($comment_text) ? "Please enter comment_text!" : "";
  $ratingError = empty($rating) ? "Please enter rating!" : "";


  if (!empty($comment_text) && !empty($rating)) {
    
    
    $columnsArray = array(
      "comment_text" => $comment_text,
      "rating" => $rating,
     
      
    );

    Insert("comments", $columnsArray);
  }
}
?>

        <input type="hidden" name="article_id" value="<?php echo $row['article_id']; ?>">
        <label for="comment">Comment:</label>
        <input name="comment_text" id="comment" placeholder="Write your comment..." required <?php echo $comment_text; ?>></input>
        
        <label for="rating">Rating (1-5):</label>
        <input type="number" name="rating" id="rating" placeholder="Rating (1-5)" min="1" max="5" required <?php echo $rating; ?>>

        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</div>

        </section>
        
       

    </main>
   
    


<?php
include_once "Layouts/Customer/footer.php"
?>
