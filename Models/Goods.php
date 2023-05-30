<?

class Goods
{
    private $db;

    function __construct()
    {
        $db_name = 'admin_serge_db';
        $db_username = 'admin_serge';
        $db_password = 'df4zRgm3fjw';

        try
        {
            $this->db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8;',
                $db_username,
                $db_password);
        } catch (PDOException $e)
        {
            die();
        }
    }

    function get_all($count = 10)
    {
        $result = array();

        $stmt = $this->db->prepare('SELECT * FROM `goods` LIMIT :count');
        $stmt->bindParam(':count', $count, PDO::PARAM_INT);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            $result[] = $row;

        return $result;
    }

    function get_by_id($id)
    {
        $result = null;

        $stmt = $this->db->prepare('SELECT * FROM `goods` WHERE `good_id` = :id');
        $stmt->execute(array('id' => $id));

        if ($stmt->rowCount() == 1)
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                $result = $row;

        return $result;
    }

    function get_comments($good_id, $count = 10)
    {
        $result = array();

        $stmt = $this->db->prepare('SELECT * FROM `comments` WHERE `good_id` = :id LIMIT :count');
        $stmt->bindParam(':count', $count, PDO::PARAM_INT);
        $stmt->bindParam(':id', $good_id);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            $result[] = $row;

        return $result;
    }

    function add_comment($good_id, $text, $nickname)
    {
        $stmt = $this->db->prepare('INSERT INTO `comments`(`good_id`, `text`, `nickname`) 
                                            VALUES (:good_id, :text, :nickname)');
        $stmt->execute(array('good_id' => $good_id,
            'text' => $text,
            'nickname' => $nickname));
    }
}