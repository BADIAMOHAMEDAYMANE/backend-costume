<?php
namespace App\Http\Controllers;

use App\Services\VesteProfileService;
use Illuminate\Http\Request;

class VesteProfileController extends Controller
{
    protected $service;

    public function __construct(VesteProfileService $service)
    {
        $this->service = $service;
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|integer',
            'profile_name' => 'string',
            'tour_poitrine' => 'numeric|nullable',
            'tour_taille' => 'numeric|nullable',
            'tour_hanches' => 'numeric|nullable',
            'largeur_epaules' => 'numeric|nullable',
            'longueur_manche' => 'numeric|nullable',
            'longueur_veste' => 'numeric|nullable',
            'type_revers' => 'in:notch,peak,shawl',
            'boutons' => 'in:1,2,3',
            'poches' => 'in:patch,flap,besom',
            'ventriere' => 'in:aucune,centrale,cote',
        ]);

        return $this->service->create($data);
    }

    public function getById($id)
    {
        return $this->service->getById($id);
    }

    public function getByUser($userId)
    {
        return $this->service->getByUser($userId);
    }

    public function update(Request $request, $id)
    {
        return $this->service->update($id, $request->all());
    }

    public function delete($id): \Illuminate\Http\JsonResponse
    {
        $this->service->delete($id);
        return response()->json(['message' => 'Profile deleted']);
    }
    public function getall(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->service->getAllVesteProfiles();
    }
}

