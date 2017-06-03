using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class attachedGun01 : MonoBehaviour {
    public bool anexarNave = false;
    public Transform anexarCollider;
    public float mouseHorizontal = 2.0f;
    public float mouseVertical = 2.0f;
    // Use this for initialization
    void Start () {
	}
	
	// Update is called once per frame
	void Update () {
        AnexarNaNave();
        
	}

    void AnexarNaNave()
    {
        if (anexarNave)
        {
            transform.position = new Vector2(anexarCollider.position.x, anexarCollider.position.y+1.5f);
            transform.Rotate(0, 0, anexarCollider.rotation.z);
            Mira();
        }
    }

    private void OnCollisionEnter2D(Collision2D collision)
    {
        if (collision.collider.name == "verificarAnexoShip01" && !anexarNave)
        {
            anexarCollider = collision.gameObject.GetComponent<Transform>();
            anexarNave = true;
        }
        Debug.Log(anexarCollider);
    }

    public void Mira()
    {
        float h = mouseHorizontal * Input.GetAxis("Mouse X");
        float v = mouseVertical * Input.GetAxis("Mouse Y");
        float diff = h + v;
        transform.Rotate(0, 0, diff);
    }
}