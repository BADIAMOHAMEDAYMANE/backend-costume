<?php
namespace App\Services;

use App\Models\VesteProfile;
use App\Repositories\VesteProfileRepository;

class VesteProfileService
{
    protected $repo;

    public function __construct(VesteProfileRepository $repo)
    {
        $this->repo = $repo;
    }

    public function create(array $data)
    {
        return $this->repo->create($data);
    }

    public function getById($id)
    {
        return $this->repo->getById($id);
    }

    public function getByUser($userId)
    {
        return $this->repo->getByUser($userId);
    }

    public function update($id, array $data)
    {
        $profile = $this->repo->getById($id);
        if (!$profile) return null;

        return $this->repo->update($profile, $data);
    }

    public function delete($id)
    {
        $profile = $this->repo->getById($id);
        if ($profile) {
            return $this->repo->delete($profile);
        }
        return false;
    }
    public function getAllVesteProfiles(){
        return $this->repo->getall();
    }

}

