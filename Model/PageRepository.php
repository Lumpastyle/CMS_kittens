<?php

/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 10/05/2016
 * Time: 12:28
 */

namespace Model;

class PageRepository
{
    /**
     * @var \PDO
     */
    private $PDO;
    /**
     * PageRepository constructor.
     * @param \PDO $PDO
     */
    public function __construct(\PDO $PDO)
    {
        $this->PDO = $PDO;
    }

    /**
     * @param $id
     * @param $data
     * @return bool
     */
    public function modifier($id, $data)
    {
        $sql ="UPDATE
                  `page`
               SET
                  `slug` = :slug,
                  `title` = :title,
                  `body` = :body
                WHERE
                  `id` = :id
                LIMIT
                  1
                ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':slug',$data->slug,\PDO::PARAM_STR);
        $stmt->bindParam(':title',$data->title,\PDO::PARAM_STR);
        $stmt->bindParam(':body',$data->body,\PDO::PARAM_STR);
        $stmt->bindParam(':id',$id,\PDO::PARAM_STR);
        $stmt->execute();

        return true;
    }

    /**
     * @param $id
     * @return bool
     */
    public function supprimer($id)
    {
        $sql="DELETE
              FROM
              `page`
              WHERE
              `id` = :id
              LIMIT
              1
        ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':id',$id,\PDO::PARAM_STR);
        $stmt->execute();

        return true;
    }

    /**
     * @param array $data
     * @return int
     */
    public function inserer($data)
    {
        $sql ="INSERT INTO
                `page`
                (
                      `slug`,
                      `title`,
                      `body`
                )
                VALUES
                (
                    :slug,
                    :title,
                    :body
                )
                ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':slug',$data->slug,\PDO::PARAM_STR);
        $stmt->bindParam(':title',$data->title,\PDO::PARAM_STR);
        $stmt->bindParam(':body',$data->body,\PDO::PARAM_STR);
        $stmt->execute();

        return 1;
    }

    /**
     * @param $slug
     * @return \stdClass\bool
     */
    public function getBySlug($slug)
    {
        $sql ="SELECT
                    `body`,
                    `title`
                FROM
                    `page`
                WHERE
                    `slug` = :slug
                ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':slug',$slug,\PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchObject();
    }

    /**
     * @return array
     */
    public function getNav()
    {
        $sql ="SELECT
                    `slug`,
                    `title`
                FROM
                    `page`
                ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        /*
        $data = [];

        while($row = $stmt->fetchObject()){
            $data[] = $row;
        };

        return $data;
        */

        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    /**
     * @param $id
     * @return \stdClass|bool
     */
    public function getById($id)
    {
        $sql ="SELECT
                    `id`,
                    `slug`,
                    `body`,
                    `title`
                FROM
                    `page`
                WHERE
                    `id` = :id
                ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':id',$id,\PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchObject();
    }

    /**
     * @return array
     */
    public function findAll()
    {
        $sql = "SELECT
                      `id`,
                      `slug`,
                      `title`
                  FROM
                      `page`
                  ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}