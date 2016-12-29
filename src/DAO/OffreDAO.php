<?php

namespace Colis\DAO;

use Doctrine\DBAL\Connection;
use Colis\Domain\Offre;

class OffreDAO
{

    private $db;

    public function __construct(Connection $db) {
        $this->db = $db;
    }

    public function findAll() {
        $sql = "select * from offres order by id desc";
        $result = $this->db->fetchAll($sql);
        
        // Convert query result to an array of domain objects
        $offres = array();
        foreach ($result as $row) {
            $offreId = $row['id'];
            $offres[$offreId] = $this->buildOffre($row);
        }
        return $offres;
    }

    public function find($offreId) {
        $sql = "select * from offres where id = ?";
        $row = $this->db->fetchAssoc($sql, array($offreId));
        if ($row)
            return $this->buildOffre($row);
        else
            throw new \Exception("No offre matching id " . $offreId);
    }

    private function buildOffre(array $row) {
        $offre = new Offre();
        $offre->setId($row['id']);
        // todo
        return $offre;
    }
}