<?php

namespace App\Http\Controllers;

use App\Services\PantalonService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Pantalon;

class PantalonController extends Controller
{
    protected PantalonService $service;

    public function __construct(PantalonService $service)
    {
        $this->service = $service;
    }

    // Changement : On retourne du JSON pour l'API
    public function getall(): JsonResponse
    {
        $pantalons = $this->service->getAllPantalon();
        return response()->json($pantalons);
    }

    // Changement : On retourne du JSON (évite l'erreur si la collection est vide)
    public function getAllByUser($userId): JsonResponse
    {
        $pantalons = $this->service->getAllByUser((int)$userId);
        return response()->json($pantalons);
    }

    public function create(Request $request): JsonResponse
    {
        $data = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'profile_name' => 'required|string|max:100',
            'tour_taille' => 'nullable|numeric|min:0|max:999.99',
            'tour_hanches' => 'nullable|numeric|min:0|max:999.99',
            'tour_cuisse' => 'nullable|numeric|min:0|max:999.99',
            'tour_genou' => 'nullable|numeric|min:0|max:999.99',
            'tour_cheville' => 'nullable|numeric|min:0|max:999.99',
            'longueur_entrejambes' => 'nullable|numeric|min:0|max:999.99',
            'longueur_totale' => 'nullable|numeric|min:0|max:999.99',
            'coupe' => 'required|in:slim,regular,loose',
            'revers' => 'required|in:oui,non',
            'type_ceinture' => 'required|in:classique,elastique',
        ]);

        $pantalon = $this->service->create($data);
        return response()->json($pantalon, 201);
    }

    // LA LIGNE 50 ÉTAIT ICI : On a enlevé le type de retour strict ": Pantalon"
    public function getById($id): JsonResponse
    {
        $pantalon = $this->service->getById($id);

        if (!$pantalon) {
            return response()->json(['message' => 'Pantalon non trouvé'], 404);
        }

        return response()->json($pantalon);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $result = $this->service->update($id, $request->all());
        return response()->json(['success' => $result]);
    }

    public function delete($id): JsonResponse
    {
        $result = $this->service->delete($id);

        if ($result) {
            return response()->json(['message' => 'Pantalon supprimé avec succès'], 200);
        }

        return response()->json(['message' => 'Pantalon non trouvé'], 404);
    }
}
