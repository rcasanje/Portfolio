using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class cameraController : MonoBehaviour
{
    private Transform cameraTransform;
    public Transform playerTransform;

    // Use this for initialization
    void Start()
    {
        cameraTransform = GetComponent<Transform>();
    }

    void Update()
    {
        cameraTransform.position = Vector3.Lerp(cameraTransform.position, new Vector3(playerTransform.position.x, playerTransform.position.y, cameraTransform.position.z), 1f);
    }
}
